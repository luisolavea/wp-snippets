/*  Agregar Imagen de productos a los email de Woocommerce */

function dpw_add_images_woocommerce_emails( $output, $order ) {
 
 static $run = 0;
 
 if ( $run ) {
 return $output;
 }
 
 $args = array(
 'show_image' => true,
 'image_size' => array( 100, 100 ),
 );
 
 $run++;
 
 return wc_get_email_order_items( $order, $args );
}
add_filter( 'woocommerce_email_order_items_table', 'dpw_add_images_woocommerce_emails', 10, 2 );
