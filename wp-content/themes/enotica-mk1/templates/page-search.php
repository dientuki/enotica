<?php
/*
Template Name: Buscador
Template Post Type: page
*/
?>

<?php get_header(); ?>

<?php the_post(); ?>

<main class="background-green">
  <div class="wrapper">
    <?php get_product_search_form(); ?>
  </div>
</main>

<?php get_footer();