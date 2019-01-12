<?php
	
// Use parent theme's styles
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

// ****************************************
// CINDY'S CUSTOMIZATIONS

// remove single product caption
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );

// add Dropbox file upload link to WooCommerce checkout page
function isa_order_received_text( $text, $order ) {
	$order_id = $order->get_order_number();
	$dropboxLink = 'https://www.dropbox.com/request/2xjNWOtwLXpC9bA7pmhY';
	return '<p>Thank you. Your order has been received.</p><p>To complete your order, please upload your video file by clicking the button below.</p><p><a href="' . $dropboxLink . '" class="upload-button">UPLOAD YOUR VIDEO</a></p>';
}
add_filter('woocommerce_thankyou_order_received_text', 'isa_order_received_text', 10, 2 );