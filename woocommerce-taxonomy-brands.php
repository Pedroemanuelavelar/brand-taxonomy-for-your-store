<?php
/**
 * Plugin Name: WooCommerce Taxonomy Brands
 * Plugin URI: https://pedroavelar.com.br
 * Description: Um plugin para adicionar taxonomia de marcas nos produtos, aparecendo diretamente na single do produto.
 * Version: 1.0
 * Author: Pedro Avelar
 * Author URI: https://pedroavelar.com.br
 * License: GNU General Public License v3.0
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 * Text Domain: woocommerce-taxonomy-brands
 * Domain Path: /languages
 * 
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

define('WTB_PLUGIN_PREFIX', 'wtb_');
define('WTB_PLUGIN_VERSION', '1.0');
define('WTB_PLUGIN_DIR', plugin_dir_path( dirname(__FILE__) ) . 'woo-taxonomy-brands/');

if ( ! defined( 'WTB_PLUGIN_BASE' ) ) {
    define( 'WTB_PLUGIN_BASE', plugin_basename( __FILE__ ) );
}

require_once WTB_PLUGIN_DIR . '/admin/wtb-settings-plugin.php';
require_once WTB_PLUGIN_DIR . '/admin/cpt/wtb-custom-post-type.php';
require_once WTB_PLUGIN_DIR . '/admin/wtb-show-on-single-product.php';
require_once WTB_PLUGIN_DIR . '/admin/wtb-show-message-woocommerce-disabled.php';







