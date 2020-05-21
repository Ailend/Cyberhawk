<?php
/**
 * Template part for displaying home page
 *
 * @package Cyberhawk_Theme
 */
?>

    <?php
        $our_clients = get_posts(array(
            'numberposts' => -1,
            'post_type' => 'our_clients',
            'orderby' => 'date',
            'order' => 'ASC',
        ));
    ?>
        <div class="main-block">
            <h1 class="main-block__title">
                Hear from our Clients
            </h1>
            <div class="main-block__inner">
                <?php
                foreach ($our_clients as $post) {
                    setup_postdata($post);
                    ?>
                    <div class="main-block__description tabcontent">
                        <div class="main-block__logo">
                            <img src="<?php echo get_the_post_thumbnail_url('', 'full'); ?>" alt="">
                        </div>
                        <h2 class="main-block__heading"><?php the_title(); ?></h2>
                        <p class="main-block__text"><?php echo get_field('content'); ?></p>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
        <div class="switch-block">
            <div class="switch-block__title">
                Trusted partners
            </div>
            <hr>
        </div>

        <div class="slider-block tab">
            <?php
            foreach ($our_clients as $post) {
                setup_postdata($post);
                ?>
                <div class="slider-block__item tablink">
                    <img class="slider-block__img" src="<?php echo get_the_post_thumbnail_url('', 'full'); ?>" alt="">
                </div>
                <?php
            }
            ?>
        </div>
    <?php wp_reset_postdata(); ?>