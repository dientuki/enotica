<?php
/*
Template Name: Buscador
Template Post Type: page
*/
?>

<?php get_header(); ?>

<?php the_post(); ?>

<main class="background-bottle page-search">
  <section class="wrapper">
    <h1 class="uppercase page-search__title">¿Que estás buscando?</h1>
    <h2 class="uppercase page-search__subtitle">Te ayudamos a encontrarlo...</h2>
    <?php get_product_search_form(); ?>
  </section>
</main>

<?php get_footer();