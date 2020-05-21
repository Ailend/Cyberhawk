<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Cyberhawk
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-34120413-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-34120413-1');
    </script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
	<link rel="profile" href="https://gmpg.org/xfn/11">
<!--    <script src="https://cdn.jsdelivr.net/npm/promise-polyfill@8/dist/polyfill.min.js"></script>-->
<!--    --><?php //wp_deregister_script('jquery'); ?>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header>
    <div class="header wrapper">
        <div class="header-logo">
            <a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/header-logo.svg" alt=""></a>
        </div>
        <nav class="header-nav">
            <div class="header-nav__burger">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <ul class="header-nav__list">
                <li class="header-nav__item"><span class="header-nav__link">Services</span>
                    <?php
                    echo preg_replace( '#<li[^>]+>#', '<li class="header-nav__item-insert">',
                        wp_nav_menu(
                            array(
                                'container'         => '',
                                'theme_location'    => 'services-header',
                                'menu_class' => 'header-nav__list-insert',
                                'depth'             => 1,
                                'echo'              => false
                            )
                        )
                    );
                    ?>
                </li>
                <li class="header-nav__item"><span class="header-nav__link">Sectors</span>
                    <?php
                    echo preg_replace( '#<li[^>]+>#', '<li class="header-nav__item-insert">',
                        wp_nav_menu(
                            array(
                                'container'         => '',
                                'theme_location'    => 'sectors-header',
                                'menu_class' => 'header-nav__list-insert',
                                'depth'             => 1,
                                'echo'              => false
                            )
                        )
                    );
                    ?>
                </li>
                <li class="header-nav__item"><span class="header-nav__link">Knowledge Hub</span>
                    <?php
                    echo preg_replace( '#<li[^>]+>#', '<li class="header-nav__item-insert">',
                        wp_nav_menu(
                            array(
                                'container'         => '',
                                'theme_location'    => 'resources-header',
                                'menu_class' => 'header-nav__list-insert',
                                'depth'             => 1,
                                'echo'              => false
                            )
                        )
                    );
                    ?>
                </li>
                <li class="header-nav__item"><span class="header-nav__link">Company</span>
                    <?php
                    echo preg_replace( '#<li[^>]+>#', '<li class="header-nav__item-insert">',
                        wp_nav_menu(
                            array(
                                'container'         => '',
                                'theme_location'    => 'company-header',
                                'menu_class' => 'header-nav__list-insert',
                                'depth'             => 1,
                                'echo'              => false
                            )
                        )
                    );
                    ?>
                </li>
            </ul>
            <a class="header-nav__button" href="<?php echo get_field('login', 92); ?>" target="_blank" rel="noopener">iHawk Login</a>
        </nav>
    </div>
</header>

