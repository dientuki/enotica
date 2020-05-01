<!DOCTYPE html>

<html <?php language_attributes(); ?>>
	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

    <link rel="profile" href="https://gmpg.org/xfn/11">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5" />

    <?php wp_head(); ?>

    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
    <!--
    <link rel="preload" href="<?php echo load_resource('AvenirNextLTPro-Regular.woff2'); ?>" as="font" type="font/woff2" crossorigin />
    <link rel="preload" href="<?php echo load_resource('AvenirNextLTPro-Bold.woff2'); ?>" as="font" type="font/woff2" crossorigin />
    -->
    <link rel="stylesheet" type="text/css" href="<?php echo load_resource('appCss.css'); ?>" />

	</head>

  <body <?php body_class(); ?>>
  
    <header class="header">
      <div class="header__top wrapper">
        
        <div class="header__logo_wrapper">
            <a class="header__logo" href="<?php echo get_home_url(); ?>">Enotica</a>
        </div>
      
        <div class='menu-user__wrapper clearfix'>
          <?php wp_nav_menu( array(
            'container_class' => 'menu-user-container clearfix',
            'menu_class' => 'menu-user',
            'theme_location'=>'cart'
          )); ?>
          <div class="header-menu-action" id="header-menu-action">
            <svg viewBox="0 0 30 30" version="1.1" id="svg3336" class="icon-menu"><path d="M1.435 8.742A1.445 1.445 0 0 1 0 7.29c0-.8.644-1.452 1.435-1.452h27.13c.791 0 1.435.652 1.435 1.452 0 .8-.644 1.452-1.435 1.452H1.435z" class="ico-menu-top" fill="#ffffff"/><path d="M1.435 16.484A1.445 1.445 0 0 1 0 15.032c0-.8.644-1.452 1.435-1.452h27.13c.791 0 1.435.652 1.435 1.452 0 .8-.644 1.452-1.435 1.452H1.435z" class="ico-menu-middle" fill="#ffffff"/><path d="M1.435 24.226A1.445 1.445 0 0 1 0 22.774c0-.8.644-1.452 1.435-1.452h27.13c.791 0 1.435.652 1.435 1.452 0 .8-.644 1.452-1.435 1.452H1.435z" class="ico-menu-bottom" fill="#ffffff"/></svg>
          </li>
        </div>
      </div>

        </div>

      <div class="header__nav">
          <?php wp_nav_menu( array(
            'container_class' => 'wrapper',
            'menu_class' => 'menu-primary',
            'theme_location'=>'primary'
          )); ?>
      </div>

    </header>

    <?php
        // verify that this is a product category page
    if ( is_product_category() ):
        global $wp_query;

        // get the query object
        $cat = $wp_query->get_queried_object();

        // get the thumbnail id using the queried category term_id
        $thumbnail_id = get_term_meta( $cat->term_id, 'thumbnail_id', true ); 

        // get the image URL
        $image = wp_get_attachment_url( $thumbnail_id ); 

        // print the IMG HTML
        ?>
        <img src='<?php echo $image; ?>' width='100%' />
    <?php endif; ?>