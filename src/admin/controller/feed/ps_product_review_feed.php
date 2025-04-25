<?php
namespace Opencart\Admin\Controller\Extension\PsProductReviewFeed\Feed;
/**
 * Class PsProductReviewFeed
 *
 * @package Opencart\Admin\Controller\Extension\PsProductReviewFeed\Feed
 */
class PsProductReviewFeed extends \Opencart\System\Engine\Controller
{
    /**
     * @var string The support email address.
     */
    const EXTENSION_EMAIL = 'support@playfulsparkle.com';

    /**
     * @var string The documentation URL for the extension.
     */
    const EXTENSION_DOC = 'https://github.com/playfulsparkle/oc4_product_review_feed.git';

    /**
     * Displays the Google Product Review Feed settings page.
     *
     * This method loads the necessary language file, sets the title of the page,
     * and prepares the data for the view. It also generates the breadcrumbs for
     * navigation and retrieves configuration settings for the sitemap.
     *
     * @return void
     */
    public function index(): void
    {
        $this->load->language('extension/ps_product_review_feed/feed/ps_product_review_feed');


        if (isset($this->request->get['store_id'])) {
            $store_id = (int) $this->request->get['store_id'];
        } else {
            $store_id = 0;
        }


        $this->document->setTitle($this->language->get('heading_title'));

        $data['breadcrumbs'] = [];

        $data['breadcrumbs'][] = [
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'])
        ];

        $data['breadcrumbs'][] = [
            'text' => $this->language->get('text_extension'),
            'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=feed', true)
        ];

        $data['breadcrumbs'][] = [
            'text' => $this->language->get('heading_title'),
            'href' => $this->url->link('extension/ps_product_review_feed/feed/ps_product_review_feed', 'user_token=' . $this->session->data['user_token'])
        ];

        $separator = version_compare(VERSION, '4.0.2.0', '>=') ? '.' : '|';

        $data['action'] = $this->url->link('extension/ps_product_review_feed/feed/ps_product_review_feed' . $separator . 'save', 'user_token=' . $this->session->data['user_token']);
        $data['fix_event_handler'] = $this->url->link('extension/ps_product_review_feed/feed/ps_product_review_feed' . $separator . 'fixEventHandler', 'user_token=' . $this->session->data['user_token']);
        $data['back'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=feed');

        $data['user_token'] = $this->session->data['user_token'];

        $data['oc4_separator'] = $separator;

        $this->load->model('setting/setting');

        $config = $this->model_setting_setting->getSetting('feed_ps_product_review_feed', $store_id);

        $data['feed_ps_product_review_feed_status'] = isset($config['feed_ps_product_review_feed_status']) ? (bool) $config['feed_ps_product_review_feed_status'] : false;
        $data['feed_ps_product_review_feed_login'] = isset($config['feed_ps_product_review_feed_login']) ? $config['feed_ps_product_review_feed_login'] : '';
        $data['feed_ps_product_review_feed_password'] = isset($config['feed_ps_product_review_feed_password']) ? $config['feed_ps_product_review_feed_password'] : '';
        $data['feed_ps_product_review_feed_opt_in_integration'] = isset($config['feed_ps_product_review_feed_opt_in_integration']) ? (bool) $config['feed_ps_product_review_feed_opt_in_integration'] : false;
        $data['feed_ps_product_review_feed_badge_integration'] = isset($config['feed_ps_product_review_feed_badge_integration']) ? (bool) $config['feed_ps_product_review_feed_badge_integration'] : false;
        $data['feed_ps_product_review_feed_merchant_id'] = isset($config['feed_ps_product_review_feed_merchant_id']) ? $config['feed_ps_product_review_feed_merchant_id'] : '';

        $data['is_oc_4_1'] = version_compare(VERSION, '4.1.0.0', '>=');

        $this->load->model('localisation/language');

        $languages = $this->model_localisation_language->getLanguages();

        $data['languages'] = $languages;

        $data['store_id'] = $store_id;

        $data['stores'] = [];

        $data['stores'][] = [
            'store_id' => 0,
            'name' => $this->config->get('config_name') . '&nbsp;' . $this->language->get('text_default'),
            'href' => $this->url->link('extension/ps_product_review_feed/feed/ps_product_review_feed', 'user_token=' . $this->session->data['user_token'] . '&store_id=0'),
        ];

        $this->load->model('setting/store');

        $stores = $this->model_setting_store->getStores();

        $store_url = HTTP_CATALOG;

        foreach ($stores as $store) {
            $data['stores'][] = [
                'store_id' => $store['store_id'],
                'name' => $store['name'],
                'href' => $this->url->link('extension/ps_product_review_feed/feed/ps_product_review_feed', 'user_token=' . $this->session->data['user_token'] . '&store_id=' . $store['store_id']),
            ];

            if ((int) $store['store_id'] === $store_id) {
                $store_url = $store['url'];
            }
        }

        $data['review_feed_urls'] = [];

        foreach ($languages as $language) {
            $data['review_feed_urls'][$language['language_id']] = rtrim($store_url, '/') . '/index.php?route=extension/ps_product_review_feed/feed/ps_product_review_feed&language=' . $language['code'];
        }

        $data['text_contact'] = sprintf($this->language->get('text_contact'), self::EXTENSION_EMAIL, self::EXTENSION_EMAIL, self::EXTENSION_DOC);

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('extension/ps_product_review_feed/feed/ps_product_review_feed', $data));
    }

    /**
     * Saves the settings for the Google Product Review Feed.
     *
     * This method validates user permissions, processes the submitted form data,
     * and saves the settings to the database. It returns a JSON response indicating
     * success or failure.
     *
     * @return void
     */
    public function save(): void
    {
        $this->load->language('extension/ps_product_review_feed/feed/ps_product_review_feed');

        $json = [];

        if (!$this->user->hasPermission('modify', 'extension/ps_product_review_feed/feed/ps_product_review_feed')) {
            $json['error'] = $this->language->get('error_permission');
        }

        if (!$json && !isset($this->request->post['store_id'])) {
            $json['error'] = $this->language->get('error_store_id');
        }

        if (!$json) {
            if (empty($this->request->post['feed_ps_product_review_feed_merchant_id'])) {
                $json['error']['input-merchant-id'] = $this->language->get('error_merchant_id');
            } elseif (preg_match('/^\d{7,10}$/', strtoupper($this->request->post['feed_ps_product_review_feed_merchant_id'])) !== 1) {
                $json['error']['input-merchant-id'] = $this->language->get('error_merchant_id_invalid');
            }
        }

        if (!$json) {
            $this->load->model('setting/setting');

            $this->model_setting_setting->editSetting('feed_ps_product_review_feed', $this->request->post, $this->request->post['store_id']);

            $json['success'] = $this->language->get('text_success');
        }

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }

    /**
     * Installs the Google Product Review Feed extension.
     *
     * This method will contain logic to set up the necessary configurations or
     * database tables needed for the extension upon installation. Currently, it is empty.
     *
     * @return void
     */
    public function install(): void
    {
        if ($this->user->hasPermission('modify', 'extension/feed')) {
            $this->load->model('setting/setting');

            $data = [
            ];

            $this->model_setting_setting->editSetting('feed_ps_product_review_feed', $data);

            $this->load->model('setting/event');

            $this->_registerEvents();
        }
    }

    /**
     * Uninstalls the Google Product Review Feed extension.
     *
     * This method will contain logic to remove configurations or database tables
     * created by the extension upon uninstallation. Currently, it is empty.
     *
     * @return void
     */
    public function uninstall(): void
    {
        if ($this->user->hasPermission('modify', 'extension/feed')) {
            $this->load->model('setting/event');

            $this->_unregisterEvents();
        }
    }

    public function fixEventHandler(): void
    {
        $this->load->language('extension/ps_product_review_feed/feed/ps_product_review_feed');

        $json = [];

        if (!$this->user->hasPermission('modify', 'extension/ps_product_review_feed/feed/ps_product_review_feed')) {
            $json['error'] = $this->language->get('error_permission');
        }

        if (!$json) {
            $this->load->model('setting/event');

            $this->_unregisterEvents();

            if ($this->_registerEvents() > 0) {
                $json['success'] = $this->language->get('text_success');
            } else {
                $json['error'] = $this->language->get('error_event');
            }
        }

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }

    private function _unregisterEvents(): void
    {
        $this->model_setting_event->deleteEventByCode('feed_ps_product_review_feed');
    }

    private function _registerEvents(): int
    {
        $separator = version_compare(VERSION, '4.0.2.0', '>=') ? '.' : '|';

        $events = [
            ['trigger' => 'catalog/controller/checkout/success/before', 'description' => '', 'actionName' => 'eventCatalogControllerCheckoutSuccessBefore'],
            ['trigger' => 'catalog/view/common/success/before', 'description' => '', 'actionName' => 'eventCatalogViewCommonSuccessBefore'],

            ['trigger' => 'catalog/view/product/review/before', 'description' => '', 'actionName' => 'eventCatalogViewProductReviewBefore'],
        ];

        $result = 0;

        if (version_compare(VERSION, '4.0.1.0', '>=')) {
            foreach ($events as $event) {
                $result += $this->model_setting_event->addEvent([
                    'code' => 'feed_ps_product_review_feed',
                    'description' => $event['description'],
                    'trigger' => $event['trigger'],
                    'action' => 'extension/ps_product_review_feed/feed/ps_product_review_feed' . $separator . $event['actionName'],
                    'status' => '1',
                    'sort_order' => '0'
                ]);
            }
        } else {
            foreach ($events as $event) {
                $result += $this->model_setting_event->addEvent(
                    'feed_ps_product_review_feed',
                    $event['description'],
                    $event['trigger'],
                    'extension/ps_product_review_feed/feed/ps_product_review_feed' . $separator . $event['actionName']
                );
            }
        }

        return $result > 0;
    }
}
