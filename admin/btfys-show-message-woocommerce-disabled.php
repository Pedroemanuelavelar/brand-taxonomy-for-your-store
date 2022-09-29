<?php

add_action( 'admin_init', 'btfys_plugin_check_if_woocommerce_installed' );
function btfys_plugin_check_if_woocommerce_installed() {

    // If WooCommerce is NOT installed, Deactivate the plugin
    if ( is_admin() && current_user_can( 'activate_plugins') && !is_plugin_active( 'woocommerce/woocommerce.php') ) {

        // Show dismissible error notice
        add_action( 'admin_notices', 'btfys_plugin_woocommerce_check_notice' );

        // Deactivate this plugin
        deactivate_plugins( plugin_basename( __FILE__) );
        if ( isset( $_GET['activate'] ) ) {
            unset( $_GET['activate'] );
        }
    }
    // If WooCommerce is installed, activate the plugin and carry out further processing
    elseif ( is_admin() && is_plugin_active( 'woocommerce/woocommerce.php') ) {

        // Carry out further processing here
    }
}

// Show dismissible error notice if WooCommerce is not present
function btfys_plugin_woocommerce_check_notice() {
    ?>
    <div class="alert alert-danger notice is-dismissible">
        <p>Sorry, but this plugin requires WooCommerce in order to work.
            So please ensure that WooCommerce is both installed and activated. Please <a href="http://localhost:10058/wp-admin/update.php?action=install-plugin&plugin=woocommerce&_wpnonce=9fa1191bdf">install and activate</a> 
        </p>
    </div>
    <?php
}