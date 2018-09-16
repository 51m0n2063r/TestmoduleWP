<?php
   /*
   Plugin Name: Castro
   Plugin URI: http://localhost
   */
add_action( 'woocommerce_after_calculate_totals', 'action_cart_calculate_totals', 10, 1 );
function action_cart_calculate_totals( $cart_object ) {

    if ( is_admin() && ! defined( 'DOING_AJAX' ) )
        return;

    if ( !WC()->cart->is_empty() ):
        ## Displayed subtotal (+10%)
        $cart_object->subtotal *= 0.5;

        ## Displayed TOTAL (+10%)
        $cart_object->total *= 0.5;

        ## Displayed TOTAL CART CONTENT (+10%)
        $cart_object->cart_contents_total *= 0.5;

    endif;
}

?>