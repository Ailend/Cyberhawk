<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Cyberhawk
 */

?>


<footer>
    <div class="footer">
        <div class="wrapper">
            <div class="block-subscribe">
                <h3 class="block-subscribe__title">Subscribe to our newsletter</h3>

                <?php echo do_shortcode( '[hubspot type=form portal=5323069 id=8da87e55-651a-4498-83d8-484ba1fd579a]' ); ?>

                <div class="block-subscribe__address">
                    <div class="block-subscribe__items">
                        <span><?php echo get_field('office_usa', 92); ?></span>
                        <a class="block-subscribe__link" href="#"><?php echo get_field('street_usa', 92); ?> <?php echo get_field('city_usa', 92); ?> <?php echo get_field('country_usa', 92); ?></a>
                    </div>
                    <div class="block-subscribe__items">
                        <a class="block-subscribe__link" href="mailto:<?php echo get_field('e-mail_usa', 92); ?>"><?php echo get_field('e-mail_usa', 92); ?></a><br>
                        <a class="block-subscribe__link" href="tel:<?php echo get_field('tel_usa', 92); ?>"><?php echo get_field('tel_usa', 92); ?></a>
                    </div>
                </div>
                <div class="block-subscribe__address">
                    <div class="block-subscribe__items">
                        <span><?php echo get_field('office_uk', 92); ?></span>
                        <a class="block-subscribe__link" href="#"><?php echo get_field('street', 92); ?> <?php echo get_field('city', 92); ?> <?php echo get_field('country', 92); ?></a>
                    </div>
                    <div class="block-subscribe__items">
                        <a class="block-subscribe__link" href="mailto:<?php echo get_field('e-mail', 92); ?>"><?php echo get_field('e-mail', 92); ?></a><br>
                        <a class="block-subscribe__link" href="tel:<?php echo get_field('tel', 92); ?>"><?php echo get_field('tel', 92); ?></a>
                    </div>
                </div>
            </div>

            <div class="block">
                <div class="block-info">
                    <div class="block-info__item">
                        <h4 class="block-info__title">Services</h4>
                        <?php
                        $args = array(
                            'container'     => '',
                            'menu_class' => 'footer-nav__list',
                            'theme_location'  => 'services-footer',
                            'depth'         => 1,
                            'fallback_cb'   => false,
                        );
                        wp_nav_menu($args);
                        ?>
                    </div>

                    <div class="block-info__item">
                        <h4 class="block-info__title">Sectors</h4>
                        <?php
                        $args = array(
                            'container'     => '',
                            'menu_class' => 'footer-nav__list',
                            'theme_location'  => 'sectors-footer',
                            'depth'         => 1,
                            'fallback_cb'   => false,
                        );
                        wp_nav_menu($args);
                        ?>
                    </div>
                    <div class="block-info__item">
                        <h4 class="block-info__title">Knowledge Hub</h4>
                        <?php
                        $args = array(
                            'container'     => '',
                            'menu_class' => 'footer-nav__list',
                            'theme_location'  => 'resources-footer',
                            'depth'         => 1,
                            'fallback_cb'   => false,
                        );
                        wp_nav_menu($args);
                        ?>
                    </div>
                    <div class="block-info__item">
                        <h4 class="block-info__title">Company</h4>
                        <?php
                        $args = array(
                            'container'     => '',
                            'menu_class' => 'footer-nav__list',
                            'theme_location'  => 'company-footer',
                            'depth'         => 1,
                            'fallback_cb'   => false,
                        );
                        wp_nav_menu($args);
                        ?>
                    </div>
                </div>
                <div class="block-link">
                    <div class="block-link__logo">
                        <a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/header-logo-white.svg" alt=""></a>
                    </div>
                    <div class="block-link__social">
                        <a target="_blank" href="<?php echo get_field('linkedin', 92); ?>" class="block-link__items"><img src="<?php echo get_template_directory_uri(); ?>/img/linkedin.svg" alt=""></a>
                        <a target="_blank" href="<?php echo get_field('youtube', 92); ?>" class="block-link__items"><img src="<?php echo get_template_directory_uri(); ?>/img/youtube.svg" alt=""></a>
                        <a target="_blank" href="<?php echo get_field('twitter', 92); ?>" class="block-link__items"><img src="<?php echo get_template_directory_uri(); ?>/img/twitter.svg" alt=""></a>
                        <!--<a href="<?php /*echo get_field('facebook', 92); */?>" class="block-link__items"><img src="<?php /*echo get_template_directory_uri(); */?>/img/facebook.svg" alt=""></a>-->
                    </div>
                </div>
            </div>
        </div>
        <div class="wrapper">
            <div class="block-link none">
                <div class="block-link__logo">
                    <a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/header-logo-white.svg" alt=""></a>
                </div>
                <div class="block-link__social">
                    <a target="_blank" href="<?php echo get_field('linkedin', 92); ?>" class="block-link__items"><img src="<?php echo get_template_directory_uri(); ?>/img/linkedin.svg" alt=""></a>
                    <a target="_blank" href="<?php echo get_field('youtube', 92); ?>" class="block-link__items"><img src="<?php echo get_template_directory_uri(); ?>/img/youtube.svg" alt=""></a>
                    <a target="_blank" href="<?php echo get_field('twitter', 92); ?>" class="block-link__items"><img src="<?php echo get_template_directory_uri(); ?>/img/twitter.svg" alt=""></a>
                    <!--<a href="<?php /*echo get_field('facebook', 92); */?>" class="block-link__items"><img src="<?php /*echo get_template_directory_uri(); */?>/img/facebook.svg" alt=""></a>-->
                </div>
            </div>
        </div>

    </div>




    <div class="subfooter">
        <div class="wrapper">
            <div class="subfooter__copyright">
                <?php echo get_field('copyright_info', 92); ?>
            </div>
            <div class="subfooter__list">
                <?php
                $args = array(
                    'container' => false,
                    'echo' => false,
                    'theme_location'  => 'footer',
                );
                    $output = strip_tags(wp_nav_menu($args),'<a>');
                    $output = preg_replace('/<a/', '<a class="subfooter__links"', $output);
                    echo $output;
                ?>
            </div>
        </div>
    </div>
</footer>


<?php wp_footer(); ?>

</body>
</html>
