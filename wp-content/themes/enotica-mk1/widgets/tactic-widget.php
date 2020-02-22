<?php $pages = new WP_Query(
  array(
    'order' => 'ASC',
    'orderby' => 'menu_order', 
    'post_parent' => $parent_page,
    'post_type' => 'page'
  )
) ;?>

<section class="widget-tactic">

  <div class="wrapper">
    <div class="widget-tactic__container">
      <?php while ( $pages->have_posts() ): $pages->the_post(); ?>
        <div class="widget-tactic__item">
          <figure class="widget-tactic__image-wrapper">
            <img data-original="<?php echo get_the_post_thumbnail_url(get_the_ID()) ?>" class="lzl widget-tactic__image" />
          </figure>
          <div class="widget-tactic__title uppercase bold"><?php the_title(); ?></div>
          <div class="widget-tactic__text"><?php the_content(); ?></div>
        </div>    
      <?php endwhile; ?>
    </div>
  </div>

</section>