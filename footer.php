    <footer role="contentinfo">
            
        <div class="footer__menus">
            <div class="max__width">

                <?php
                    while(have_rows('footer_menus', 'options')) : the_row();

                        $footer_menu = get_sub_field('footer_menu');
                        ?>
                        <article class="footer__menu">
                            <h5><?php echo $footer_menu->name; ?> <span class="ion-ios-plus-empty"></span></h5>

                            <?php wp_nav_menu(array('menu' => $footer_menu->name, 'container' => false, 'walker' => new clean_walker)); ?>
                        </article>

                <?php endwhile; ?>

                <article class="footer__menu">
                    <h5>Find Us <span class="ion-ios-plus-empty"></span></h5>

                    <ul class="contact">
                        <li>Mathew House,</li>
                        <li>Gorey Village,</li>
                        <li>Jersey,</li>
                        <li>Channel Islands, JE3 9EP</li>
                    </ul>
                </article>

                <article class="footer__menu">
                    <h5>Contact Us <span class="ion-ios-plus-empty"></span></h5>

                    <ul>
                        <li><i class="fa fa-phone"></i><a href="tel:01534840400">01534 840 400</a></li>
                        <li><i class="fa fa-envelope"></i><a href="mailto:info@quereeoptometrists.co.uk">info@quereeoptometrists.co.uk</a></li>
                    </ul>
                </article>

                <article class="footer__menu social">
                   <h5>Follow Us <span class="ion-ios-plus-empty"></span></h5>
                    <?php if(get_field('header_social', 'options')): ?>
                        <ul class="social-wrapper">
                            <?php while(have_rows('header_social', 'options')) : the_row(); ?>
                                <li>
                                    <a href="<?php the_sub_field('header_social_url'); ?>" title="<?php the_sub_field('header_social_platform'); ?>" target="_blank">
                                        <i class="<?php the_sub_field('header_social_icon'); ?>"></i>
                                    </a>
                                </li>
                            <?php endwhile; ?>
                        </ul><!-- header__social -->

                    <?php endif; ?>

                </article>

            </div><!-- max__width -->

        </div><!-- footer__menus -->

        <div class="subfooter">
            <div class="subfooter__credits">
                <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/img/logo.png" alt="<?php bloginfo('name'); ?>">
                <p>&copy;<?php bloginfo('name') ?> <?php echo date("Y"); ?></p>
                <p class="credit"><a href="https://thomson-website-solutions.com/" target="_blank">Website by Thomson Website Solutions</a></p>
            </div><!-- subfooter__credits -->
        </div><!-- subfooter -->
            
    </footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
