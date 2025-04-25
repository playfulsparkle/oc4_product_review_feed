<?php
namespace Opencart\Catalog\Model\Extension\PsProductReviewFeed\Feed;
/**
 * Class PsProductReviewFeed
 *
 * @package Opencart\Catalog\Model\Extension\PsProductReviewFeed\Feed
 */
class PsProductReviewFeed extends \Opencart\System\Engine\Model
{

    /**
     * Retrieves product codes (EAN, MPN etc.) for given product IDs from OpenCart database
     *
     * Fetches product codes and their values from the product_code table and joins with
     * identifier table to get status information. Results are cached for performance.
     *
     * @param array $product_ids Array of product IDs to fetch codes for
     * @return array Associative array with product IDs as keys and array of code=>value pairs as values
     *              Format: [product_id => [code => value]]
     *              Example: [123 => ['ean' => '1234567890']]
     *              Returns empty array if no product IDs provided
     */
    public function getProductCodes(array $product_ids = []): array
    {
        if (empty($product_ids)) {
            return [];
        }

        $sql = "SELECT `pc`.`product_id`, `pc`.`code`, `pc`.`value`, `i`.`status` FROM `" . DB_PREFIX . "product_code` `pc` LEFT JOIN `" . DB_PREFIX . "identifier` `i` ON (`pc`.code = `i`.`code`) WHERE `product_id` IN (" . implode(',', $product_ids) . ") AND `pc`.`value` != ''";

        $key = md5($sql);

        $product_codes = $this->cache->get('product_codes.' . $key);

        if (!$product_codes) {
            $query = $this->db->query($sql);

            $product_codes = [];

            foreach ($query->rows as $row) {
                $product_codes[$row['product_id']] = [strtolower($row['code']) => $row['value']];
            }

            $this->cache->set('product_codes.' . $key, $product_codes);
        }

        return $product_codes;
    }

    public function getReviews(): array {
		$query = $this->db->query("SELECT
                `r`.`review_id`,
                `r`.`author`,
                `r`.`customer_id`,
                `r`.`text`,
                `p`.`product_id`,
                `pd`.`name` AS `product_name`,
                `m`.`name` AS `manufacturer_name`,
                `r`.`rating`
            FROM `" . DB_PREFIX . "review` `r`
            LEFT JOIN `" . DB_PREFIX . "product` `p` ON (`r`.`product_id` = `p`.`product_id`)
            LEFT JOIN `" . DB_PREFIX . "product_description` `pd` ON (`p`.`product_id` = `pd`.`product_id`)
            LEFT JOIN `" . DB_PREFIX . "manufacturer` `m` ON (`p`.`manufacturer_id` = `m`.`manufacturer_id`)
            WHERE
                `p`.`date_available` <= NOW() AND
                `p`.`status` = '1' AND
                `r`.`status` = '1' AND
                `pd`.`language_id` = '" . (int)$this->config->get('config_language_id') . "'"
        );

		return $query->rows;
	}

    public function replaceCatalogViewCommonSuccessBefore(array $args): array
    {
        $views = [];

        $views[] = [
            'search' => '{{ text_message }}',
            'replace' => <<<HTML
            {{ text_message }}
            <script src="https://apis.google.com/js/platform.js?onload=renderOptIn" async defer></script>
            <script>
                // GCR Opt-in Module Code
                window.renderOptIn = function() {
                    window.gapi.load('surveyoptin', function() {
                    window.gapi.surveyoptin.render(
                        {
                        "merchant_id": {{ ps_merchant_id}},
                        "order_id": "{{ ps_order_id }}",
                        "email": "{{ ps_email }}",
                        "delivery_country": "{{ ps_delivery_country }}",
                        "estimated_delivery_date": "{{ ps_estimated_delivery_date }}",
                        {% if ps_products %}"products": [{{ ps_products}}]{% endif %}
                        });
                    });
                }
                // GCR Language Code
                window.___gcfg = { lang: "{{ ps_lang }}" };
            </script>
            HTML
        ];

        return $views;
    }

    public function replaceCatalogViewProductReviewBefore(array $args): array
    {
        $views = [];

        $views[] = [
            'search' => '{{ captcha }}',
            'replace' => <<<HTML
            <script src="https://apis.google.com/js/platform.js?onload=renderBadge" async defer></script>
            <script>
                window.renderBadge = function() {
                    var ratingBadgeContainer = document.createElement("div");
                    document.body.appendChild(ratingBadgeContainer);
                    window.gapi.load('ratingbadge', function() {
                    window.gapi.ratingbadge.render(ratingBadgeContainer, {"merchant_id": {{ ps_merchant_id }}});
                    });
                }
            </script>
            {{ captcha }}
            HTML
        ];

        return $views;
    }
}
