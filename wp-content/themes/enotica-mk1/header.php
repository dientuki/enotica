<!DOCTYPE html>

<html <?php language_attributes(); ?>>
	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

    <link rel="profile" href="https://gmpg.org/xfn/11">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5" />

    <?php wp_head(); ?>
    
    <link rel="stylesheet" type="text/css" href="<?php echo load_resource('appCss.css'); ?>" />

	</head>

  <body <?php body_class(); ?>>
  
    <header class="header">
      <div class="header__top">
      
          <?php wp_nav_menu( array(
            'container_class' => 'menu-social__wrapper',
            'menu_class' => 'menu-social',
            'theme_location'=>'cart'
          )); ?>
      </div>

      <div class="header__nav">
          <?php wp_nav_menu( array(
            'container_class' => 'menu-social__wrapper',
            'menu_class' => 'menu-social',
            'theme_location'=>'primary'
          )); ?>      
      </div>

    </header>