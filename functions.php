<?php

//adding css & js
function poseidon_custom_theme() {
    wp_register_style('custom_css', get_template_directory_uri() . '/css/style.css', false, '1.0.0');
    wp_register_style('poppins_cdn', 'https://fonts.googleapis.com/css2?family=Poppins&display=swap', false, '1.0.0');
    wp_register_script('icons_cdn', 'https://kit.fontawesome.com/9002e235b2.js', false, '1.0.0');

    wp_enqueue_style('custom_css');
    wp_enqueue_style('poppins_cdn');
    wp_enqueue_script('icons_cdn');
}
add_action( 'wp_enqueue_scripts', 'poseidon_custom_theme' );

//Creating custom menu
function poseidon_custom_menu() {
    register_nav_menu('top-menu',__('Poseidon Custom Menu', 'Poseidoncustommenu'));
}
add_action('init', 'poseidon_custom_menu');


//woocommerce
if (class_exists('WooCommerce')) {
    //WooCommerce Support
    function woocommerceshop_add_woocommerce_support() {
        add_theme_support( 'woocommerce' );
    }
    add_action ( 'after_setup_theme', 'woocommerceshop_add_woocommerce_support' );


add_filter('woocommerce_show_page_title', '__return_false');    

add_theme_support( 'wc-product-gallery-zoom' );
add_theme_support( 'wc-product-gallery-lightbox' );
add_theme_support( 'wc-product-gallery-slider' );

}






add_filter( 'get_product_search_form' , 'woo_custom_product_searchform' );

function woo_custom_product_searchform( $form ) {

    $form = '<form role="search" method="get" id="searchform" action="' . esc_url( home_url( '/'  ) ) . '">
		<div>
			<label class="screen-reader-text" for="s">' . __( 'Search for:', 'woocommerce' ) . '</label>
			<input type="text" value="' . get_search_query() . '" name="s" id="s" placeholder="' . __( 'My Search form', 'woocommerce' ) . '" />
			<input type="submit" id="searchsubmit" value="'. esc_attr__( 'Search', 'woocommerce' ) .'" />
			<input type="hidden" name="post_type" value="product" />
		</div>
	</form>';
    return $form;

}