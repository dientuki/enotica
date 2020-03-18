		<?php get_header(); ?>
    <?php the_post() ?>
    
    <main>
      <div class="title-section">
        <?php the_title(); ?>
      </div>    
      <?php the_content(); ?>
    </main>

		<?php get_footer();