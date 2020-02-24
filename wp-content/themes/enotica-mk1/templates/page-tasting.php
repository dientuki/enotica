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
    <div class="wrapper">
      <h1><?php the_title() ?>
      <div><?php the_content(); ?></div>
    </div>
    
    <?php $tmp = get_field_object( 'cf7' ); ?>
    <?php if ($tmp): ?>
      <div class="background-bottle"><?php echo do_shortcode($tmp['value']); ?></div>
    <?php endif; ?>
  </article>
</main>

<?php get_footer();