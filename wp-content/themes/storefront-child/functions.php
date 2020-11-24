<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );

// END ENQUEUE PARENT ACTION



add_action( 'woocommerce_product_options_sku', 'art_woo_add_custom_fields' );
function art_woo_add_custom_fields() {
   global $product, $post;
   echo '<div class="options_group">';// Группировка полей
  
   // цифровое поле
   woocommerce_wp_text_input( array(
      'id'                => '_number_field',
      'label'             => __( 'Штрих код', 'woocommerce' ),
      'placeholder'       => 'Ввод чисел',
      'description'       => __( 'Вводятся только числа', 'woocommerce' ),
      'type'              => 'number',
      'custom_attributes' => array(
         'step' => 'any',
         'min'  => '0',
      ),
   ) );  
   
}

add_action( 'woocommerce_process_product_meta', 'art_woo_custom_fields_save', 10 );
function art_woo_custom_fields_save( $post_id ) {

	

	// Сохранение цифрового поля
    $woocommerce_number_field = $_POST['_number_field'];
    if ( !empty($woocommerce_number_field)) {
       update_post_meta( $post_id, '_number_field', esc_attr( $woocommerce_number_field ) );
    }

	

	// Сохраняем все значения
	//$product->save();

}

add_action( 'woocommerce_product_meta_end', 'artabr_add_field_after_price', 11 );
function artabr_add_field_after_price() {
   global $post, $product;
 
   $num_field = get_post_meta( $post->ID, '_number_field', true );
  
  
   if ( $num_field ) { ?>
      <div class="number-field">
         <span>Штрих код: </span>
         <?php echo $num_field; ?>
      </div>
   <?php }
  
}
	
	

