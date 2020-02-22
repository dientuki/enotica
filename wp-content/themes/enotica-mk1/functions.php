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

/**
 * Register navigation menus uses wp_nav_menu.
 */
function enotica_mk1_init() {
	$locations = array(
    'primary'  => 'Header Menu',
    'social' => 'Social Networks'
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

  // Header
	register_sidebar(
    array(
      'name'        => "Header",
      'id'          => 'header',
      'description' => "Widgets del header",
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