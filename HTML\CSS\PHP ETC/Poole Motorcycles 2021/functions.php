 <?php
                function link_css_stylesheet() {
                    wp_enqueue_style('style', get_stylesheet_uri());
                }

                add_action('wp_enqueue_scripts', 'link_css_stylesheet');
				remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart');

    remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart');

	add_filter( 'woocommerce_is_purchasable', '__return_false'); // DISABLING PURCHASE FUNCTIONALITY AND REMOVING ADD TO CART BUTTON FROM NORMAL PRODUCTS

remove_action('woocommerce_single_variation', 'woocommerce_single_variation_add_to_cart_button', 20); // REMOVING ADD TO CART BUTTON FROM VARIATION
add_filter('woocommerce_empty_price_html', 'custom_call_for_price');

function custom_call_for_price() {
     return 'POA';
}

  function bd_rrp_price_html( $price, $product ) {
  $return_string = 'RRP: ' . $price;
  return $return_string;
}
add_filter( 'woocommerce_get_price_html', 'bd_rrp_price_html', 100, 2 );

add_action( 'woocommerce_after_single_product_summary', 'bbloomer_single_category_slug' );
?>

<?php
function bbloomer_single_category_slug() 
{ 
    global $post;
      $product = new WC_Product( $post->ID );
 
  if ( has_term( 'Community', 'product_cat' ) )
  {
    
  }
  elseif ($product->get_price() == '')
  {
      ?> <h2> RRP: POA <a href="contact-us">(Contact us to get a price)</a> <?php
  }
  else 
  {
    ?> <h2> <?php echo $product->get_price_html();
  }
}
?>


