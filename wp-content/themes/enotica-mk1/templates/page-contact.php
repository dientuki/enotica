<?php
/*
Template Name: Contacto
Template Post Type: page
*/
?>

<?php get_header(); ?>

<?php the_post(); ?>
<main class="page-tasting">
  <article>
    <img src="/wp-content/themes/enotica-mk1/assets/images/menu-contacto-ubicacion.jpg" width="100%">
    <div class="wrapper page-tasting__top">
      <h1 class="page-tasting__title uppercase"><?php the_title() ?></h1>
      <div class="page-tasting__content"><?php the_content(); ?></div>
    </div>
    
    <?php $tmp = get_field_object( 'contacto-form' ); ?>
    <?php if ($tmp): ?>
      <div class="background-bottle">
        <div class="wrapper">
          <?php echo do_shortcode($tmp['value']); ?>
        </div>
      </div>
    <?php endif; ?>
  </article>
</main>

<?php get_footer();