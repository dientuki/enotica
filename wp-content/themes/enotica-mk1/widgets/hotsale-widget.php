<section class="widget-hotsale">

  <header class="widget-hotsale__header uppercase">
    <div class="wrapper">
      <h1 class="widget-hotsale__title bold"><span class="widget-hotsale__hot">hot</span> <span class="widget-hotsale__sale">sale</span></h1>
      <h2 class="widget-hotsale__subtitle"><?php echo $subtitle; ?></h2>
    </div>
</header>
  
  <div class="widget-hotsale__container">
    <div class="wrapper">
    <?php
 
      // En 'cat' deberás colocar el ID de la categoría que deseas mostrar.
      // En 'posts_per_page' deberás colocar la cantidad de posts que deseas mostrar.
      $the_query = new WP_Query( array( 'product_cat' => 'hotsale', 'posts_per_page' => 12 ) ); ?>
        
      <?php if ( $the_query->have_posts() ) : ?>
      
      <ul class="container-products">
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
          <!-- Template -->
          <?php $regular_price = get_post_meta( get_the_ID(), '_regular_price', true );?>
          <?php $price = get_post_meta( get_the_ID(), '_price', true );?>   
          <?php
          $price_diference=$regular_price-$price;
          $percent_discount=$price_diference*100/$regular_price;
          ?>
          <li class="product-wrapper type-product status-publish first instock product_cat-hotsale has-post-thumbnail sale shipping-taxable purchasable product-type-simple">
              <div class="product">
                <span class="discount">- <?php echo floor($percent_discount);?> %</span>
                <a href="<?php the_permalink(); ?>" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                  <?php 
                  /*
                  $image = wp_get_attachment_image_src( get_post_thumbnail_id( $the_query->post->ID ) );
                  $image_id=get_post_thumbnail_id( $the_query->post->ID); 
                  */ 
                  $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id(), array('225', '225') );
                  $featured_image_url = $featured_image[0];
                  $featured_image_width = $featured_image[1];
                  $featured_image_height = $featured_image[2];
                  ?>
                  <img width="225" height="225" src="<?php echo $featured_image[0]; ?>" data-id="<?php echo get_the_ID() ?>">
                </a>
                <a href="?add-to-cart=<?php echo the_ID();?>" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="<?php echo the_ID();?>" data-product_sku="" aria-label="Añade “<?php the_title(); ?>” a tu carrito" rel="nofollow">
                  <div class="icon-cart-button"></div>
                  <div class="text-button">Comprar</div>
                </a>
                <h2 class="woocommerce-loop-product__title"><?php the_title(); ?></h2> 
                <span class="price"><del><span class="woocommerce-Price-amount amount"><?php echo wc_price( $regular_price ); ?> </span></del> <ins><span class="woocommerce-Price-amount amount"><?php echo wc_price( $price ); ?></span></ins></span>
              </div>              
            
          </li>
          <!-- Fin Template--> 
        <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
      <?php endif; ?>
      </ul>      
    </div>
  </div>

</section>