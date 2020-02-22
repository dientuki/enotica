		<footer class="footer">
      <div class="footer__top wrapper">
        <div class="footer__item">
        </div>
        <div class="footer__item">
          <?php dynamic_sidebar("Footer Contact"); ?>
        </div>
        <div class="footer__item">
          <div>Redes</div>
          <?php wp_nav_menu( array(
              'container_class' => 'menu-social__wrapper',
              'menu_class' => 'menu-social',
              'theme_location'=>'social'
            )); ?>
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