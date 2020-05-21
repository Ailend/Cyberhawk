<?php /* Template Name: Main Page */ ?>

<?php
get_header();
?>

<main class="homepage">
    <?php
        while (have_posts()) :
            the_post();
            get_template_part('template-parts/content', 'slider');
        ?>
        
    <section id="anchor" class="company wrapper">
        <?php get_template_part('template-parts/content', 'carousel'); ?>
    </section>


    <section class="cards">
        <div class="wrapper">
            <div class="cards-block">
                <?php
                $cards = get_posts(array(
                    'numberposts' => -1,
                    'post_type' => 'cards',
                    'orderby' => 'date',
                    'order' => 'ASC',
                ));
                foreach ($cards as $post) {
                    setup_postdata($post);
                    ?>

                <div class="cards-block__item">
                    <h3 class="cards-block__title"><?php the_title(); ?></h3>

                    <p class="cards-block__text"><?php echo get_the_excerpt(); ?></p>
                    <div class="cards-block__img">
                        <img src="<?php echo get_the_post_thumbnail_url('', 'full'); ?>" alt="">
                    </div>
                    <a href="<?php echo get_field('cards_link');  ?>" class="cards-block__button">
                        <span>Learn more</span>
                        <img class="cards-block__arrow" src="<?php echo get_template_directory_uri(); ?>/img/arrow-up-right-black.svg" alt="">
                    </a>
                    <img class="cards-block__arrow" src="<?php echo get_template_directory_uri(); ?>/img/arrow-up-right-black.svg" alt="">
                </div>

                    <?php
                }
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </section>


    <section class="collection wrapper">
        <div class="collection-inner">
            <?php
                $ihawk = get_posts(array(
                    'numberposts' => -1,
                    'post_type' => 'uav',
                    'orderby' => 'date',
                    'order' => 'ASC',
                ));
            ?>
            <div class="collection-block">
                <?php
                    foreach ($ihawk as $post) {
                        setup_postdata($post);
                    ?>
                    <div class="collection-block__description">
                        <div class="collection-block__line"></div>
                        <div class="collection-block__item">
                            <div class="collection-block__title">
                                <?php the_title(); ?>
                            </div>
                            <div class="collection-block__text collection-block__text-animation">
                                <?php
                                if (!function_exists('first_paragraph')) {
                                    function first_paragraph($content)
                                    {
                                        return preg_replace('/<p([^>]+)?>/', '<p$1 class="">', $content, -1);
                                    }
                                }
                                add_filter('the_content', 'first_paragraph');
                                ?>
                                <?php the_content(); ?>
                            </div>
                            <button class="read-more-button">
                                <p class="main-button__text">Read More</p>
                            </button>
                        </div>
                        <?php
                        $link_serv = get_field('link_serv');
                        if( $link_serv ): ?>
                            <a href="<?php echo esc_url( $link_serv ); ?>" class="main-button">
                                <p class="main-button__text">Learn More</p>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/arrow-up-right-black.svg" alt="">
                            </a>
                        <?php endif; ?>
                    </div>
                    <?php
                }
                ?>
            </div>

            <div class="collection-container">
                <div class="collection-scroll">
                    <div class="collection-scroll__thumb"></div>
                </div>
                <div class="select-block">
                    <?php
                        foreach ($ihawk as $post) {
                            setup_postdata($post);
                            ?>
                        <div class="select-block__item">
                            <?php the_post_thumbnail('thumbnail', array('class' => 'select-block__img')); ?>
                            <div class="select-block__title"><?php the_title(); ?></div>
                            <div class="select-block__text"><?php echo get_field('description'); ?></div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
            <?php wp_reset_postdata(); ?>
        </div>
    </section>

    <section class="animation" id="particles-js">
        <div class="wrapper">
            <div class="animation-block-left">
                <h1 class="animation-block-left__title">
                    <span>Why is</span> <br>
                    Cyberhawk different?
                </h1>
                <p class="animation-block-left__description">
                    <?php echo get_field('why_is_cyberhawk_different_description'); ?>
                </p>
            </div>
            <div class="animation-block-right">
                <a href="<?php echo get_field('request_call_back_button_link'); ?>" class="main-button">
                    <p class="main-button__text">Request call back</p>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/arrow-up-right-black.svg" alt="">
                </a>
                <p class="animation-block-right__description">
                    <?php echo get_field('we_offer_description'); ?>
                </p>

            </div>
        </div>
    </section>

    <section class="news wrapper">
        <div class="news-block">
            <h2 class="news-block__title">News & Blog</h2>
            <p class="news-block__text"><?php echo get_field('news_&_blog_description', 92); ?></p>
        </div>
        <?php echo do_shortcode( '[wp_rss_retriever url="https://insights.thecyberhawk.com/news_and_blog/rss.xml" items="1000" orderby="date" title="true" excerpt="none" read_more="true" new_window="true" thumbnail="200" source="false" date="false" cache="100" credits="false"]' ); ?>
        <a href="<?php echo get_field('news_&_blog_link', 92); ?>" class="main-button">
            <p class="main-button__text">Read More </p>
            <img src="<?php echo get_template_directory_uri(); ?>/img/arrow-up-right-black.svg" alt="">
        </a>
    </section>



    <section class="last">
        <div class="last-block">
            <div class="last-block__inner">
                <p class="last-block__text">
                    <?php echo get_field('all_jobs_description'); ?>
                </p>
                <a href="<?php echo get_field('all_jobs_button_link'); ?>" class="main-button">
                    <p class="main-button__text">Search all jobs</p>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/arrow-up-right-black.svg" alt="">
                </a>
            </div>
        </div>
        <div class="last-block-right">
            <div class="last-block-right__inner">
                <h4 class="last-block-right__title">
                    Join the <br>
                    <span>Cyberhawk Team</span>
                </h4>
                <p class="last-block-right__text">
                    <?php echo get_field('cyberhawk_team_description'); ?>
                </p>
            </div>
        </div>
    </section>

    <section class="location">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 700 320" enable-background="new 0 0 900 720" xml:space="preserve" id="worldmap">
      </svg>
        <div class="location-inner wrapper">
            <div class="location-description">
                <h2 class="location-description__title">
                    <span>Cyberhawk</span> <br>
                    Global Reach
                </h2>
                <p class="location-description__text">
                    <?php echo get_field('description', 92); ?>
                </p>
            </div>
            <div class="location-block">
                <div class="location-block__count">
                    <div class="location-block__item">
                        <span><?php echo get_field('users_№', 92); ?></span>
                        <p class="location-block__text"><?php echo get_field('users', 92); ?></p>
                    </div>
                    <div class="location-block__item">
                        <span><?php echo get_field('clients_№', 92); ?></span>
                        <p class="location-block__text"><?php echo get_field('clients', 92); ?></p>
                    </div>
                    <div class="location-block__item">
                        <span><?php echo get_field('drone_№', 92); ?></span>
                        <p class="location-block__text"><?php echo get_field('drone', 92); ?></p>
                    </div>
                    <div class="location-block__item">
                        <span><?php echo get_field('countries_№', 92); ?></span>
                        <p class="location-block__text"><?php echo get_field('countries', 92); ?></p>
                    </div>
                </div>
                <a href="<?php echo get_permalink('115'); ?>" class="main-button">
                    <p class="main-button__text">About Company</p>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/arrow-up-right-black.svg" alt="">
                </a>
            </div>
        </div>
    </section>
    <?php endwhile; // End of the loop.
    ?>
</main>


<?php 
	if( is_front_page() ){
		 echo '<div id="p_prldr"><div class="contpre"><span class="svg_anm"></span></div></div>';
	}
	else {
		 echo "This is not the main page";
	}
?>


<?php
get_footer();
?>


