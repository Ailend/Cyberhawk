<?php
/**
 * Template part for displaying posts
 *
 * @package Cyberhawk
 */
?>

<main class="careers-position-page">
    <section class="banner" style="background-image: url(<?php echo the_post_thumbnail_url(); ?>), linear-gradient(to bottom, rgba(238, 238, 238, 0), rgba(0, 0, 0, 0.5));">
        <h1 class="banner-title"><?php the_title(); ?></h1>
        <a class="main-button works-card-btn modal-button">
            <p class="main-button__text">Apply</p>
            <img src="<?php echo get_template_directory_uri(); ?>/img/arrow-up-right-black.svg" alt="">
        </a>
    </section>

    <section class="full-info">
        <div class="wrapper">
            <p class="text-main"><b>Location:</b> <?php echo get_field('location'); ?></p>
            <p class="text-main"><b>Contract:</b> <?php echo get_field('contract'); ?></p>
            <p class="text-main"><b>Benefits:</b> <?php echo get_field('benefits'); ?></p>
            <?php
            if (!function_exists('p')) {
                function p($content)
                {
                    return preg_replace('/<p([^>]+)?>/', '<p$1 class="text">', $content, -1);
                }
            }
            add_filter('the_content', 'p');
            ?>
            <?php
            if (!function_exists('h3')) {
                function h3($content)
                {
                    return preg_replace('/<h3([^>]+)?>/', '<h3$1 class="title">', $content, -1);
                }
            }
            add_filter('the_content', 'h3');
            ?>
            <?php
            if (!function_exists('ul')) {
                function ul($content)
                {
                    return preg_replace('/<ul([^>]+)?>/', '<ul$1 class="list">', $content, -1);
                }
            }
            add_filter('the_content', 'ul');
            ?>
            <?php
            if (!function_exists('li')) {
                function li($content)
                {
                    return preg_replace('/<li([^>]+)?>/', '<li$1 class="list-item">', $content, -1);
                }
            }
            add_filter('the_content', 'li');
            ?>
            <?php  the_content(); ?>
            <p class="text no-agencies">
                No agencies please.
            </p>
            <div class="apply">
                <div>
                    <p class="text-main"><b>Contact:</b> <?php echo get_field('contact'); ?></p>
                    <p class="text-main"><b>Reference:</b> <?php echo get_field('reference'); ?></p>
                    <p class="text-main"><b>Job ID:</b> <?php echo get_field('job_id'); ?></p>
                </div>
                <a class="main-button works-card-btn modal-button">
                    <p class="main-button__text">Apply</p>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/arrow-up-right-black.svg" alt="">
                </a>
            </div>
        </div>
    </section>
    <section class="similar-positions">
        <div class="wrapper">
            <h2 class="similar-positions-title">Similar Positions</h2>
            <p class="similar-positions-subtitle">All the latest jobs</p>
        </div>
        <div class="wrapper">
            <div class="similar-positions-slider">

                <?php
                $sectors = get_posts(array(
                    'numberposts' => -1,
                    'post_type' => 'works_card_careers',
                    'orderby' => 'date',
                    'order' => 'ASC',
                ));
                foreach ($sectors as $post) {
                setup_postdata($post);
                ?>

                <div class="similar-positions-slider-item">
                    <h3 class="similar-positions-slider-item-title">
                        <?php the_title(); ?>
                    </h3>
                    <p class="similar-positions-slider-item-text"><b>Location:</b> <?php echo get_field('location'); ?></p>
                    <p class="similar-positions-slider-item-text"><b>Contract:</b> <?php echo get_field('contract'); ?></p>
                    <p class="similar-positions-slider-item-text"><b>Benefits:</b> <?php echo get_field('benefits'); ?></p>
                    <a href="<?php the_permalink(); ?>" class="main-button works-card-btn">
                        <p class="main-button__text">See Full Listing</p>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/arrow-up-right-black.svg" alt="">
                    </a>
                </div>
               <?php
                }
                wp_reset_postdata();
                ?>

            </div>
        </div>
    </section>
    <div class="popup-wrap">
        <div class="popup">
            <button class="popup__close">
            </button>
            <div class="popup__content">
                <p class="modal-title-form"></p>
                <?php echo do_shortcode('[contact-form-7 id="1784" title="Careers"]') ?>
            </div>
        </div>
    </div>
</main>

