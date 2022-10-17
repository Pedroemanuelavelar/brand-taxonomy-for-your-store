<?php
/**
 * Plugin Name: Brand Taxonomy for your Store
 * Description: An additional plugin for woocommerce to add taxonomies of brands to products, appearing directly in the single of the product.
 * Version: 1.0.0
 * Author: Pedro Avelar
 * Author URI: https://pedroavelar.com.br
 * License: GNU General Public License v3.0
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 * Text Domain: brand-taxonomy-for-your-store
 * Domain Path: /languages
 * WC tested up to: 6.9.4
 * 
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

define('BTFYS_PLUGIN_PREFIX', 'btfys_');
define('BTFYS_PLUGIN_VERSION', '1.0.0');
define('BTFYS_PLUGIN_DIR', plugin_dir_path( dirname(__FILE__) ) . 'brand-taxonomy-for-your-store/');

if ( ! defined( 'BTFYS_PLUGIN_BASE' ) ) {
    define( 'BTFYS_PLUGIN_BASE', plugin_basename( __FILE__ ) );
}

require_once BTFYS_PLUGIN_DIR . '/admin/btfys-settings-plugin.php';
require_once BTFYS_PLUGIN_DIR . '/admin/cpt/btfys-custom-post-type.php';
require_once BTFYS_PLUGIN_DIR . '/admin/btfys-show-on-single-product.php';
require_once BTFYS_PLUGIN_DIR . '/admin/btfys-show-message-woocommerce-disabled.php';








