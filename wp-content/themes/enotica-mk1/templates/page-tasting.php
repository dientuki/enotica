<?php
/*
Template Name: Degustacion
Template Post Type: page
*/
?>

<?php get_header(); ?>

<?php the_post(); ?>

<main class="page-tasting">
  <article>
    <div class="wrapper page-tasting__top">
      <h1 class="page-tasting__title uppercase"><?php the_title() ?></h1>
      <div class="page-tasting__content"><?php the_content(); ?></div>
    </div>
    
    <?php $tmp = get_field_object( 'cf7' ); ?>
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