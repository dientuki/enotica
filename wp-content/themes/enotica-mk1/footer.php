		<footer class="footer">
      <div class="wrapper">
        <div class="footer__top">
          <div class="footer__item item_logo">
            <a class="footer__logo" href="<?php echo get_home_url(); ?>">enotica</a>
          </div>
          <div class="footer__item footer__contact">
            <?php dynamic_sidebar("footer"); ?>
          </div>
          <div class="footer__item footer__network">
            <div class="footer__title uppercase">Redes</div>
            <?php wp_nav_menu( array(
                'container_class' => 'menu-social__wrapper',
                'menu_class' => 'menu-social',
                'theme_location'=>'social'
              )); ?>
          </div>
        </div>
      </div>
      <a class="footer__bottom" href="<?php echo get_home_url(); ?>">www.enotica.com.ar</a>
    </footer>

    <script>
      "use strict";
      window.ENO = {
        mainDomain: "<?php echo get_template_directory_uri(); ?>"
      };
    </script>
		<?php wp_footer(); ?>
		
	</body>
</html>