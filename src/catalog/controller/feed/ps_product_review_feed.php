<?php
namespace Opencart\Catalog\Controller\Extension\PsProductReviewFeed\Feed;
/**
 * Class PsProductReviewFeed
 *
 *
 * This class generates an XML sitemap for Google, including products, categories,
 * manufacturers, and information pages. The sitemap is created based on the configuration
 * settings and the active languages in the OpenCart store.
 *
 * @package Opencart\Catalog\Controller\Extension\PsProductReviewFeed\Feed
 */
class PsProductReviewFeed extends \Opencart\System\Engine\Controller
{
    /**
     * Generates and outputs the Google Product Review Feed XML.
     *
     * This method checks if the sitemap feature is enabled in the configuration.
     * If it is, it initializes the XMLWriter, sets the XML header, and populates
     * the sitemap with URLs for products, categories, manufacturers, and
     * information pages based on the active languages.
     *
     * @return void
     */
    public function index(): void
    {
        if (!$this->config->get('feed_ps_product_review_feed_status')) {
            return;
        }

        $is_oc_4_1 = version_compare(VERSION, '4.1.0.0', '>=');

        $this->load->model('setting/setting');

        $config = $this->model_setting_setting->getSetting('feed_ps_product_review_feed', $this->config->get('config_store_id'));

        $login = isset($config['feed_ps_product_review_feed_login']) ? $config['feed_ps_product_review_feed_login'] : '';
        $password = isset($config['feed_ps_product_review_feed_password']) ? $config['feed_ps_product_review_feed_password'] : '';

        if ($login && $password) {
            header('Cache-Control: no-cache, must-revalidate, max-age=0');

            if (!isset($_SERVER['PHP_AUTH_USER']) || !isset($_SERVER['PHP_AUTH_PW'])) {
                header('WWW-Authenticate: Basic realm="ps_product_review_feed"');
                header('HTTP/1.1 401 Unauthorized');
                echo 'Invalid credentials';
                exit;
            } else {
                if ($_SERVER['PHP_AUTH_USER'] !== $login || $_SERVER['PHP_AUTH_PW'] !== $password) {
                    header('WWW-Authenticate: Basic realm="ps_product_review_feed"');
                    header('HTTP/1.1 401 Unauthorized');
                    echo 'Invalid credentials';
                    exit;
                }
            }
        }

        $this->load->model('localisation/language');
        $this->load->model('extension/ps_product_review_feed/feed/ps_product_review_feed');

        $languages = $this->model_localisation_language->getLanguages();

        $language = $this->config->get('config_language');

        if (isset($this->request->get['language']) && isset($languages[$this->request->get['language']])) {
            $cur_language = $languages[$this->request->get['language']];

            $language = $cur_language['code'];
        }

        $xml = new \XMLWriter();
        $xml->openMemory();
        $xml->startDocument('1.0', 'UTF-8');

        $reviews = $this->model_extension_ps_product_review_feed_feed_ps_product_review_feed->getReviews();

        // Start <feed> element
        // @see https://developers.google.com/product-review-feeds/schema
        $xml->startElement('feed'); // Start <feed>
        $xml->writeAttribute('xmlns:vc', 'http://www.w3.org/2007/XMLSchema-versioning'); // @see https://developers.google.com/shopping/reviews/schema/product/2.3/product_reviews#xmlns-vc
        $xml->writeAttribute('xmlns:xsi', 'http://www.w3.org/2001/XMLSchema-instance'); // @see https://developers.google.com/shopping/reviews/schema/product/2.3/product_reviews#xmlns-xsi
        $xml->writeAttribute('xsi:noNamespaceSchemaLocation', 'http://www.google.com/shopping/reviews/schema/product/2.3/product_reviews.xsd'); // @see https://developers.google.com/shopping/reviews/schema/product/2.3/product_reviews#xsi-noNamespaceSchemaLocation

        $xml->writeElement('version', '2.3'); // @see https://developers.google.com/shopping/reviews/schema/product/2.3/product_reviews#version

        $xml->startElement('aggregator'); // Start <aggregator>
        $xml->writeElement('name', $this->config->get('config_name'));
        $xml->endElement(); // End <aggregator>

        $xml->startElement('publisher'); // Start <publisher>

        $xml->writeElement('name', $this->config->get('config_name')); // Store name

        if (is_file(DIR_IMAGE . $this->config->get('config_icon'))) {
            $xml->startElement('favicon'); // Start <favicon>
            $xml->writeCData($this->config->get('config_url') . 'image/' . $this->config->get('config_icon')); // Store icon URL
            $xml->endElement(); // End <favicon>
        } else {
            $xml->writeElement('favicon'); // Store icon URL
        }

        $xml->endElement(); // End <publisher>

        $xml->startElement('reviews'); // Start <reviews>

        if ($is_oc_4_1) {
            $products_codes = $this->model_extension_ps_product_review_feed_feed_ps_product_review_feed->getProductCodes(array_column($reviews, 'product_id'));
        } else {
            $products_codes = [];
        }

        foreach ($reviews as $review) {
            if ($is_oc_4_1 && isset($products_codes[$review['product_id']])) {
                $review = array_merge($review, $products_codes[$review['product_id']]);
            }

            $xml->startElement('review'); // Start <review>

            $xml->writeElement('review_id', $review['review_id']);

            $xml->startElement('reviewer'); // Start <reviewer>

            $xml->startElement('name'); // Start <name>
            $xml->writeCData($review['author']); // Reviewer name
            $xml->endElement(); // End <name>

            if ($review['customer_id'] > 0) {
                $xml->writeElement('reviewer_id', $review['customer_id']);
            }

            $xml->endElement(); // End <reviewer>

            // $xml->writeElement('title'); // OpenCart does not support review title

            $xml->startElement('content'); // Start <content>
            $xml->writeCData($review['text']);
            $xml->endElement(); // End <content>

            $product_link = $this->url->link('product/product', 'language=' . $language . '&product_id=' . $review['product_id']);

            $xml->startElement('review_url'); // Start <review_url>
            $xml->writeAttribute('type', 'singleton'); // @see https://developers.google.com/shopping/reviews/schema/product/2.3/product_reviews#review_url
            $xml->writeCData($product_link); // Product URL
            $xml->endElement(); // End <review_url>

            $xml->startElement('ratings'); // Start <ratings>

            $xml->startElement('overall'); // Start <overall>
            $xml->writeAttribute('min', '1'); // @see https://developers.google.com/shopping/reviews/schema/product/2.3/product_reviews#overall
            $xml->writeAttribute('max', '5'); // @see https://developers.google.com/shopping/reviews/schema/product/2.3/product_reviews#overall
            $xml->text($review['rating']); // Overall rating
            $xml->endElement(); // End <overall>

            $xml->endElement(); // End <ratings>

            $xml->startElement('products'); // Start <products>

            $xml->startElement('product'); // Start <product>

            $xml->startElement('product_ids'); // Start <product_ids>

            if (isset($review['ean']) || isset($review['mpn'])) {
                $xml->startElement('gtins'); // Start <gtins>

                if (isset($review['ean']) && $review['ean']) {
                    $xml->startElement('ean');
                    $xml->writeCData($review['ean']);
                    $xml->endElement();
                } else if (isset($review['mpn']) && $review['mpn']) {
                    $xml->startElement('mpn');
                    $xml->writeCData($review['mpn']);
                    $xml->endElement();
                }

                $xml->endElement(); // End <gtins>
            }

            if (isset($review['mpn']) && $review['mpn']) {
                $xml->startElement('mpns'); // Start <mpns>

                $xml->startElement('mpn');
                $xml->writeCData($review['mpn']);
                $xml->endElement();

                $xml->endElement(); // End <mpns>
            }

            if (isset($review['sku']) && $review['sku']) {
                $xml->startElement('skus'); // Start <skus>

                $xml->startElement('sku');
                $xml->writeCData($review['sku']);
                $xml->endElement();

                $xml->endElement(); // End <skus>
            }

            if ($review['manufacturer_name']) {
                $xml->startElement('brands'); // Start <brands>

                $xml->writeElement('brand', $review['manufacturer_name']);

                $xml->endElement(); // End <brands>
            }

            $xml->endElement(); // End <product_ids>

            $xml->startElement('product_name'); // Start <product_name>
            $xml->writeCData($review['product_name']); // Product name
            $xml->endElement(); // End <product_name>

            $xml->startElement('product_url'); // Start <product_url>
            $xml->writeCData($product_link); // Product URL
            $xml->endElement(); // End <product_url>

            $xml->endElement(); // End <product>

            $xml->endElement(); // End <products>

            $xml->endElement(); // End <review>
        }

        $xml->endElement(); // End <reviews>

        $xml->endElement(); // End <feed>

        $xml->endDocument(); // End XML document <feed>

        $this->response->addHeader('Content-Type: application/xml');
        $this->response->setOutput($xml->outputMemory());
    }

    public function eventCatalogControllerCheckoutSuccessBefore(string &$route, array &$args): void
    {
        if (!$this->config->get('feed_ps_product_review_feed_status')) {
            return;
        }

        $this->load->model('setting/setting');

        $config = $this->model_setting_setting->getSetting('feed_ps_product_review_feed', $this->config->get('config_store_id'));

        $opt_in_integration = isset($config['feed_ps_product_review_feed_opt_in_integration']) ? (bool) $config['feed_ps_product_review_feed_opt_in_integration'] : false;

        if (!$opt_in_integration) {
            return;
        }


        $is_oc_4_1 = version_compare(VERSION, '4.1.0.0', '>=');

        if (isset($this->session->data['order_id'])) {
            $this->session->data['ps_order_id'] = $this->session->data['order_id'];
        }

        $ps_user_info = [];

        if (isset($this->session->data['customer'])) {
            $ps_user_info = array_merge($ps_user_info, array_filter($this->session->data['customer']));
        }

        if (isset($this->session->data['payment_address'])) {
            $ps_user_info = array_merge($ps_user_info, array_filter($this->session->data['payment_address']));
        }

        if (isset($this->session->data['shipping_address'])) {
            $ps_user_info = array_merge($ps_user_info, array_filter($this->session->data['shipping_address']));
        }

        if ($this->customer->isLogged() && $ps_email = $this->customer->getEmail()) {
            $this->session->data['ps_email'] = $ps_email;
        } else if (isset($this->session->data['customer']['email']) && $this->session->data['customer']['email']) {
            $this->session->data['ps_email'] = $this->session->data['customer']['email'];
        } else {
            $this->session->data['ps_email'] = null;
        }

        if (isset($ps_user_info['country']) && $ps_user_info['country']) {
            $this->session->data['ps_delivery_country'] = $ps_user_info['country'];
        } else {
            $this->session->data['ps_delivery_country'] = null;
        }

        $this->load->model('checkout/cart');
        $this->load->model('extension/ps_product_review_feed/feed/ps_product_review_feed');

        $ps_products = [];

        $products = $this->model_checkout_cart->getProducts();

        if ($is_oc_4_1) {
            $products_codes = $this->model_extension_ps_product_review_feed_feed_ps_product_review_feed->getProductCodes(array_column($products, 'product_id'));
        } else {
            $products_codes = [];
        }

        foreach ($products as $product) {
            if ($is_oc_4_1 && isset($products_codes[$product['product_id']])) {
                $product = array_merge($product, $products_codes[$product['product_id']]);
            }

            // MPN required for all products without a manufacturer-assigned GTIN
            // @see https://support.google.com/merchants/answer/6324482 - MPN [mpn]
            // @see https://support.google.com/merchants/answer/6324478 - Identifier exists [identifier_exists]
            if (isset($product['mpn']) && $product['mpn']) {
                $ps_products[] = ['gtin' => $product['mpn']];
            } else if (isset($product['ean']) && $product['ean']) {
                $ps_products[] = ['gtin' => $product['ean']];
            }
        }

        $this->session->data['ps_products'] = !empty($ps_products) ? json_encode($ps_products) : null;
    }

    public function eventCatalogViewCommonSuccessBefore(string &$route, array &$args, string &$template): void
    {
        if (!$this->config->get('feed_ps_product_review_feed_status')) {
            return;
        }

        $this->load->model('setting/setting');

        $config = $this->model_setting_setting->getSetting('feed_ps_product_review_feed', $this->config->get('config_store_id'));

        $badge_integration = isset($config['feed_ps_product_review_feed_badge_integration']) ? (bool) $config['feed_ps_product_review_feed_badge_integration'] : false;

        if (!$badge_integration) {
            return;
        }

        $args['ps_merchant_id'] = $this->config->get('feed_ps_product_review_feed_merchant_id');

        $ps_locale = $this->config->get('config_language'); // e.g., "en" or "en-gb"

        if (strpos($ps_locale, '-') !== false) {
            [$ps_lang, $ps_region] = explode('-', $ps_locale, 2); // Convert "en-gb" -> "en_GB"

            $ps_locale = strtolower($ps_lang) . '_' . strtoupper($ps_region);
        } else {
            $ps_locale = strtolower($ps_locale); // Keep as-is (e.g., "en")
        }

        $args['ps_lang'] = $ps_locale;

        if (isset($this->session->data['ps_order_id'])) {
            $args['ps_order_id'] = $this->session->data['ps_order_id'];
        } else {
            $args['ps_order_id'] = null;
        }

        if (isset($this->session->data['ps_email'])) {
            $args['ps_email'] = $this->session->data['ps_email'];
        } else {
            $args['ps_email'] = null;
        }

        if (isset($this->session->data['ps_delivery_country'])) {
            $args['ps_delivery_country'] = $this->session->data['ps_delivery_country'];
        } else {
            $args['ps_delivery_country'] = null;
        }

        $args['ps_estimated_delivery_date'] = date('Y-m-d', strtotime('+1 day'));

        if (isset($this->session->data['ps_products'])) {
            $args['ps_products'] = $this->session->data['ps_products'];
        } else {
            $args['ps_products'] = null;
        }

        unset(
            $this->session->data['ps_order_id'],
            $this->session->data['ps_email'],
            $this->session->data['ps_delivery_country'],
            $this->session->data['ps_estimated_delivery_date'],
            $this->session->data['ps_products']
        );

        $this->load->model('extension/ps_product_review_feed/feed/ps_product_review_feed');

        $views = $this->model_extension_ps_product_review_feed_feed_ps_product_review_feed->replaceCatalogViewCommonSuccessBefore($args);

        $template = $this->replaceViews($route, $template, $views);
    }

    public function eventCatalogViewProductReviewBefore(string &$route, array &$args, string &$template): void
    {
        if (!$this->config->get('feed_ps_product_review_feed_status')) {
            return;
        }

        $args['ps_merchant_id'] = $this->config->get('feed_ps_product_review_feed_merchant_id');


        $this->load->model('extension/ps_product_review_feed/feed/ps_product_review_feed');

        $views = $this->model_extension_ps_product_review_feed_feed_ps_product_review_feed->replaceCatalogViewProductReviewBefore($args);

        $template = $this->replaceViews($route, $template, $views);
    }

    /**
     * Retrieves the contents of a template file based on the provided route.
     *
     * This method checks if an event template buffer is provided. If so, it returns that buffer.
     * If not, it constructs the template file path based on the current theme settings and checks
     * for the existence of the template file. If the file exists, it reads and returns its contents.
     * It supports loading templates from both the specified theme directory and the default template directory.
     *
     * @param string $route The route for which the template is being retrieved.
     *                      This should match the naming convention for the template files.
     * @param string $event_template_buffer The template buffer that may be passed from an event.
     *                                       If provided, this buffer will be returned directly,
     *                                       bypassing file retrieval.
     *
     * @return mixed Returns the contents of the template file as a string if it exists,
     *               or false if the template file cannot be found or read.
     */
    protected function getTemplateBuffer(string $route, string $event_template_buffer): mixed
    {
        if ($event_template_buffer) {
            return $event_template_buffer;
        }

        if (defined('DIR_CATALOG')) {
            $dir_template = DIR_TEMPLATE;
        } else {
            if ($this->config->get('config_theme') == 'default') {
                $theme = $this->config->get('theme_default_directory');
            } else {
                $theme = $this->config->get('config_theme');
            }

            $dir_template = DIR_TEMPLATE . $theme . '/template/';
        }

        $template_file = $dir_template . $route . '.twig';

        if (file_exists($template_file) && is_file($template_file)) {
            $template_file = $this->modCheck($template_file);

            return file_get_contents($template_file);
        }

        if (defined('DIR_CATALOG')) {
            return false;
        }

        $dir_template = DIR_TEMPLATE . 'default/template/';
        $template_file = $dir_template . $route . '.twig';

        if (file_exists($template_file) && is_file($template_file)) {
            $template_file = $this->modCheck($template_file);

            return file_get_contents($template_file);
        }

        // Support for OC4 catalog
        $dir_template = DIR_TEMPLATE;
        $template_file = $dir_template . $route . '.twig';

        if (file_exists($template_file) && is_file($template_file)) {
            $template_file = $this->modCheck($template_file);

            return file_get_contents($template_file);
        }

        return false;
    }

    /**
     * Checks and modifies the provided file path based on predefined directory constants.
     *
     * This method checks if the file path starts with specific directory constants (`DIR_MODIFICATION`,
     * `DIR_APPLICATION`, and `DIR_SYSTEM`). Depending on these conditions, it modifies the file path to
     * point to the appropriate directory under `DIR_MODIFICATION`.
     *
     * - If the file path starts with `DIR_MODIFICATION`, it checks if it should point to either the
     *   `admin` or `catalog` directory based on the definition of `DIR_CATALOG`.
     * - If `DIR_CATALOG` is defined, the method checks for the file in the `admin` directory.
     *   Otherwise, it checks in the `catalog` directory.
     * - If the file path starts with `DIR_SYSTEM`, it checks for the file in the `system` directory
     *   within `DIR_MODIFICATION`.
     *
     * The method ensures that the returned file path exists before modifying it.
     *
     * @param string $file The original file path to check and modify.
     * @return string|null The modified file path if found, or null if it does not exist.
     */
    protected function modCheck(string $file): mixed
    {
        if (defined('DIR_MODIFICATION')) {
            if ($this->startsWith($file, DIR_MODIFICATION)) {
                if (defined('DIR_CATALOG')) {
                    if (file_exists(DIR_MODIFICATION . 'admin/' . substr($file, strlen(DIR_APPLICATION)))) {
                        $file = DIR_MODIFICATION . 'admin/' . substr($file, strlen(DIR_APPLICATION));
                    }
                } else {
                    if (file_exists(DIR_MODIFICATION . 'catalog/' . substr($file, strlen(DIR_APPLICATION)))) {
                        $file = DIR_MODIFICATION . 'catalog/' . substr($file, strlen(DIR_APPLICATION));
                    }
                }
            } elseif ($this->startsWith($file, DIR_SYSTEM)) {
                if (file_exists(DIR_MODIFICATION . 'system/' . substr($file, strlen(DIR_SYSTEM)))) {
                    $file = DIR_MODIFICATION . 'system/' . substr($file, strlen(DIR_SYSTEM));
                }
            }
        }

        return $file;
    }

    /**
     * Checks if a given string starts with a specified substring.
     *
     * This method determines if the string $haystack begins with the substring $needle.
     *
     * @param string $haystack The string to be checked.
     * @param string $needle The substring to search for at the beginning of $haystack.
     *
     * @return bool Returns true if $haystack starts with $needle; otherwise, false.
     */
    protected function startsWith(string $haystack, string $needle): bool
    {
        if (strlen($haystack) < strlen($needle)) {
            return false;
        }

        return (substr($haystack, 0, strlen($needle)) == $needle);
    }

    /**
     * Replaces specific occurrences of a substring in a string with a new substring.
     *
     * This method searches for all occurrences of a specified substring ($search) in a given string ($string)
     * and replaces the occurrences at the positions specified in the $nthPositions array with a new substring ($replace).
     *
     * @param string $search The substring to search for in the string.
     * @param string $replace The substring to replace the found occurrences with.
     * @param string $string The input string in which replacements will be made.
     * @param array $nthPositions An array of positions (1-based index) indicating which occurrences
     *                            of the search substring to replace.
     *
     * @return mixed The modified string with the specified occurrences replaced, or the original string if no matches are found.
     */
    protected function replaceNth(string $search, string $replace, string $string, array $nthPositions): mixed
    {
        $pattern = '/' . preg_quote($search, '/') . '/';
        $matches = [];
        $count = preg_match_all($pattern, $string, $matches, PREG_OFFSET_CAPTURE);

        if ($count > 0) {
            foreach ($nthPositions as $nth) {
                if ($nth > 0 && $nth <= $count) {
                    $offset = $matches[0][$nth - 1][1];
                    $string = substr_replace($string, $replace, $offset, strlen($search));
                }
            }
        }

        return $string;
    }

    /**
     * Replaces placeholders in a template with corresponding values from the views array.
     *
     * This method retrieves the template content based on the given route and template name,
     * then replaces specified search strings with their corresponding replace strings.
     * If positions are specified, the method performs replacements only at those positions.
     *
     * @param string $route The route associated with the template.
     * @param string $template The name of the template to be processed.
     * @param array $views An array of associative arrays where each associative array contains:
     *                     - string 'search': The string to search for in the template.
     *                     - string 'replace': The string to replace the 'search' string with.
     *                     - array|null 'positions': (Optional) An array of positions
     *                     where replacements should occur. If not provided,
     *                     all occurrences will be replaced.
     *
     * @return mixed The modified template content after performing the replacements.
     */
    protected function replaceViews(string $route, string $template, array $views): mixed
    {
        $output = $this->getTemplateBuffer($route, $template);

        foreach ($views as $view) {
            if (isset($view['positions']) && $view['positions']) {
                $output = $this->replaceNth($view['search'], $view['replace'], $output, $view['positions']);
            } else {
                $output = str_replace($view['search'], $view['replace'], $output);
            }
        }

        return $output;
    }
}
