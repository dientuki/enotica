		<?php get_header(); ?>
    <?php the_post() ?>
    
    <main class="wrapper">
      <div class="title-section">
        <?php the_title(); ?>
      </div>    
      <?php the_content(); ?>
    </main>

		<?php get_footer();