<?php
function btfys_show_on_sigle(){
    global $product;
    echo get_the_term_list( $product->get_id(), 'Brands', '<span class="posted_in">' . _n( 'Brand:', 'Brand:',  'woocommerce' ) . ' ', ', ', '</span><br>' );
  }
  add_action( 'woocommerce_single_product_summary', BTFYS_PLUGIN_PREFIX . 'show_on_sigle',25);