<?php
/**
 * Template part for displaying home page
 *
 * @package Cyberhawk_Theme
 */
?>
<section class="banner-slider">

    <?php
    $slider = get_posts(array(
        'numberposts' => -1,
        'post_type' => 'home_page_top_slider',
        'orderby' => 'date',
        'order' => 'ASC',
    ));
    foreach ($slider as $post) {
        setup_postdata($post);
        ?>

        <div class="banner-slider__item" style="background-image:url(<?php echo the_post_thumbnail_url(); ?>);">
            <div class="banner-slider__container">
                <h1 class="banner-slider__title"><?php echo get_field('home_title_slider'); ?></h1>
                <p class="banner-slider__text"><?php echo get_field('description'); ?></p>
            </div>
            <?php
            $link = get_field('slider_link');
            if( $link ): ?>
                <a href="<?php echo esc_url( $link ); ?>" class="main-button">
                    <p class="main-button__text"><?php echo get_field('text_button'); ?></p>
                    <img class="white" src="<?php echo get_template_directory_uri(); ?>/img/arrow-up-right.svg" alt="">
                    <img class="black" src="<?php echo get_template_directory_uri(); ?>/img/arrow-up-right-black.svg" alt="">
                </a>
            <?php endif; ?>
        </div>

        <?php
    }
    wp_reset_postdata();
    ?>
</section>
