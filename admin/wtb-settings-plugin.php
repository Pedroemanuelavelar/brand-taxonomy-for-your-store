<?php



/**
 * Adiciona na página de plugins links customizados ao plugin WooCommerceTaxonomy Brands
 */
add_filter('plugin_action_links_' . WTB_PLUGIN_BASE,  'wtb_custom_admin_plugin_link');

function wtb_custom_admin_plugin_link( $links ) {
    
    $urls = [
        [
            'Github' => 'https://github.com/Pedroemanuelavelar/'
        ],
        [
            'Linkedin' => 'https://www.linkedin.com/in/pedro-emanuel-de-avelar-sousa-de-almeida-10a337160'
        ],
        [
            'Contribua' => 'https://github.com/Pedroemanuelavelar/woo-taxonomy-brands'
        ],
        [
            'Email' => 'mailto:pedroemanuel5296@gmail.com'
        ]
    ];

    $keys = array_keys($urls);
    for($i = 0; $i < count($urls); $i++) {
        foreach($urls[$keys[$i]] as $key => $value) {
            $link = '<a href="'.esc_url( $value ).'" target="_blank">'.esc_html( $key).'</a>';
            $links[] = $link;
        }
    }

    return $links;
}