<?php
//lets define a constant for the URL to your theme folder
define('ENOTICAMK1_THEME_FOLDER_PATH', trailingslashit(get_template_directory(__FILE__)));

function load_resource($resource, $url = true) {
  $manifest = file_get_contents(ENOTICAMK1_THEME_FOLDER_PATH . 'dist/manifest.json');

  if ($manifest == false) {
    return false;
  }

  $json = json_decode($manifest, TRUE);

  foreach ($json as $key => $value) {

    $tmp = explode('/', $key);
    $path = end($tmp);

    if ($path == $resource) {
      if ($url) {
        $file = get_template_directory_uri() . '/dist/' .$value;
      } else {
        $file = ENOTICAMK1_THEME_FOLDER_PATH . 'dist/' . $value;
      }

      return $file;
    }
  }
}

function load_critical_css($file = false) {

  if ($file == false) {
    return false;
  }

  $styles = file_get_contents(load_resource($file, false));
  return $styles;
}

function load_svg($file) {
  $folder = '/dist/svg/';
  $filename = ENOTICAMK1_THEME_FOLDER_PATH . $folder . $file . '.svg';

  if (file_exists($filename)) {
    return file_get_contents($filename, FILE_USE_INCLUDE_PATH);
  }

  return false;
}

function enotica_mk1_theme_support() {
  add_theme_support( 'post-thumbnails', array( 'page' ) );
}

add_action( 'after_setup_theme', 'enotica_mk1_theme_support' );

/**
 * Register navigation menus uses wp_nav_menu.
 */
function enotica_mk1_init() {
	$locations = array(
    'primary'  => 'Header Menu',
    'social' => 'Social Networks',
    'cart' => 'User Interaction'
  );
  
  register_nav_menus( $locations );
}

add_action( 'init', 'enotica_mk1_init' );

function enotica_mk1_widget_area_registration() {
	// Footer 
	register_sidebar(
    array(
      'name'        => "Footer",
      'id'          => 'footer',
      'description' => "Widgets del footer",
      'before_title'  => '',
      'after_title'   => '',
      'before_widget' => '',
      'after_widget'  => '',      
    )
  );

  // Front page
	register_sidebar(
    array(
      'name'        => "Front Page",
      'id'          => 'front-page',
      'description' => "Widgets de la home",
      'before_title'  => '',
      'after_title'   => '',
      'before_widget' => '',
      'after_widget'  => '',      
    )
  );
}

add_action( 'widgets_init', 'enotica_mk1_widget_area_registration' );

//lets load the custom widget
require_once (ENOTICAMK1_THEME_FOLDER_PATH . 'widgets/class.contact-widget.php');
require_once (ENOTICAMK1_THEME_FOLDER_PATH . 'widgets/class.tactic-widget.php');
require_once (ENOTICAMK1_THEME_FOLDER_PATH . 'widgets/class.hotsale-widget.php');

/**
 * Filter the CSS class for a nav menu based on a condition.
 *
 * @param array  $classes The CSS classes that are applied to the menu item's <li> element.
 * @param object $item    The current menu item.
 * @return array (maybe) modified nav menu class.
 */
function enotica_mk1_nav_class( $classes, $item, $args ) {
  $classes[] = $args->menu_class . '__item';

  return $classes;
}
add_filter( 'nav_menu_css_class' , 'enotica_mk1_nav_class' , 10, 3 );

function enotica_mk1_menu_link_class( $atts, $item, $args ) {
  $atts['class'] = $args->menu_class . '__link';

  return $atts;
}
add_filter( 'nav_menu_link_attributes', 'enotica_mk1_menu_link_class', 1, 3 );


/**
 * woocommerce_single_product_summary hook
 *
 * @hooked woocommerce_template_single_title - 5
 * @hooked woocommerce_template_single_price - 10
 * @hooked woocommerce_template_single_excerpt - 20
 * @hooked woocommerce_template_single_add_to_cart - 30
 * @hooked woocommerce_template_single_meta - 40
 * @hooked woocommerce_template_single_sharing - 50
 */

add_filter('woocommerce_sale_flash', 'woo_custom_hide_sales_flash');
function woo_custom_hide_sales_flash() {
  return false;
}

add_filter( 'woocommerce_product_add_to_cart_text', 'woo_custom_cart_button_text' );    // 2.1 +
 
function woo_custom_cart_button_text() {
  return __( "Comprar", 'woocommerce' );
}
//loop
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );
remove_action( 'woocommerce_before_shop_loop' , 'woocommerce_result_count', 20 );
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );
//single product
add_filter('wc_add_to_cart_message', 'handler_function_name', 10, 2);
function handler_function_name($message, $product_id) {
    return "¡Has agregado el producto al carrito!";
}