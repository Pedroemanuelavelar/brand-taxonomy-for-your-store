<?php
function btfys_register_taxonomy_brands() {
    $labels = array(
        'name'              => _x( 'Brands', 'taxonomy general name' ),
        'singular_name'     => _x( 'Brand', 'taxonomy singular name' ),
        'search_items'      => __( 'Search Brands' ),
        'all_items'         => __( 'All Brands' ),
        'parent_item'       => __( 'SubBrands' ),
        'parent_item_colon' => __( 'SubBrand:' ),
        'edit_item'         => __( 'Edit Brand' ),
        'update_item'       => __( 'Update Brand' ),
        'add_new_item'      => __( 'Add new Brand' ),
        'new_item_name'     => __( 'New name Brand' ),
        'menu_name'         => __( 'Brands' ),
    );

    $args   = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => [ 'slug' => 'brand' ],
    );
    register_taxonomy( 'Brands', [ 'product' ], $args );
}
add_action( 'init', BTFYS_PLUGIN_PREFIX . 'register_taxonomy_brands' );