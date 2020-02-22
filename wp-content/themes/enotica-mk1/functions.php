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