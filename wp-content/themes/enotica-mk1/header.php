<!DOCTYPE html>

<html <?php language_attributes(); ?>>
	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

    <link rel="profile" href="https://gmpg.org/xfn/11">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5" />

    <?php wp_head(); ?>
    
    <link rel="preload" href="<?php echo load_resource('AvenirNextLTPro-Regular.woff2'); ?>" as="font" type="font/woff2" crossorigin />
    <link rel="preload" href="<?php echo load_resource('AvenirNextLTPro-Bold.woff2'); ?>" as="font" type="font/woff2" crossorigin />
    <link rel="stylesheet" type="text/css" href="<?php echo load_resource('appCss.css'); ?>" />

	</head>

  <body <?php body_class(); ?>>
  
    <header class="header">
      <div class="header__top wrapper">
        <a class="header__logo" href="<?php echo get_home_url(); ?>">Enotica</a>
      
        <?php wp_nav_menu( array(
          'container_class' => 'menu-user__wrapper',
          'menu_class' => 'menu-user',
          'theme_location'=>'cart'
        )); ?>
      </div>

      <div class="header__nav">
          <?php wp_nav_menu( array(
            'container_class' => 'wrapper',
            'menu_class' => 'menu-primary',
            'theme_location'=>'primary'
          )); ?>      
      </div>

    </header>