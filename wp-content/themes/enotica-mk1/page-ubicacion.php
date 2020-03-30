<?php get_header(); ?>
    <?php the_post() ?>
    <main>    
      <?php //the_content(); ?>
        <img src="/wp-content/themes/enotica-mk1/assets/images/menu-contacto-ubicacion.jpg" width="100%">
        <div class="iframe-ubication">
            <div class="footer__top">
                <div class="footer__item footer__contact">
                    <ul>
                        <li class="widget-contact__item icon-address">Viamonte 1363, CABA</li>
                        <li class="widget-contact__item icon-phone">7521.7049</li>
                        <li class="widget-contact__item icon-email"><a href="mailto:info.enotica@gmail.com">info.enotica@gmail.com</a></li>
                    </ul>
                </div>          
                <div class="footer__item footer__network">
                    <div class="menu-social__wrapper">
                        <ul id="menu-social" class="menu-social">
                            <li id="menu-item-91" class="facebook menu-item menu-item-type-custom menu-item-object-custom menu-item-91 menu-social__item"><a href="http://www.facebook.com" class="menu-social__link">Enotica vinoteca</a></li>
                            <li id="menu-item-92" class="instagram menu-item menu-item-type-custom menu-item-object-custom menu-item-92 menu-social__item"><a href="https://www.instagram.com" class="menu-social__link">@enoticavinoteca</a></li>
                        </ul>
                    </div>          
                </div>
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3284.1459238519938!2d-58.388390884770416!3d-34.60047138046043!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccac70919e96d%3A0x24d3e14e89f55bf!2sViamonte%201363%2C%20C1053ACA%20CABA!5e0!3m2!1ses-419!2sar!4v1585166205661!5m2!1ses-419!2sar" width="800" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            <div class="expand-ubication">
                <figure class="wp-block-image size-large is-resized">
                    <img src="/wp-content/themes/enotica-mk1/assets/images/icon-ampliar.png" alt="" class="wp-image-342" width="44" height="44"/>
                </figure>
                <a href="https://goo.gl/maps/6i4sg1Rzq5qHXVdN8">Ampliar</a>
            </div>
        </div>            
    </main>
<?php get_footer();