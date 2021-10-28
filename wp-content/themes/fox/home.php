<?php /* Template Name: Home page */ ?>

<?php get_header(); ?>
    <!-- Start Header -->
    <section id="slide" class="slide background-withcolor">
        <div class="content-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6" data-aos="fade-right">
                        <p class="mb-0"><?php the_field('home_upper_text'); ?></p>
                        <h2><?php the_field('home_main_text'); ?></h2>
                        <p><?php the_field('home_lower_text'); ?></p>
                        <?php if ( !empty(get_field('home_button_text')) && !empty(get_field('home_button_link')) ) : ?>
                        <a href="<?php the_field('home_button_link'); ?>" class="btn btn-primary btn-white shadow btn-theme"><span><?php the_field('home_button_text'); ?></span></a>
                        <?php endif; ?>
                    </div>
                    <div class="col-md-6" data-aos="fade-left" data-aos-delay="200">
                        <img src="<?php the_field('home_image'); ?>" class="img-fluid d-block mx-auto" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Header -->

    <!-- Start Boxes -->
    <section id="boxes" class="boxes padding-100">
        <div class="container">
            <div class="row">
                <?php foreach ( get_field('home_information_blocks') as $block ): ?>
                <div class="col-md-4 col-12">
                    <div class="box" data-aos="fade-up">
                        <div class="icon">
                            <span class="<?php echo $block['home_info_block_icon']; ?>"></span>
                        </div>
                        <div class="space-20"></div>
                        <h4><?php echo $block['home_info_block_title']; ?></h4>
                        <div class="space-15"></div>
                        <p><?php echo $block['home_info_block_content']; ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!-- End Boxes -->

    <!-- Start Why Us -->
    <section id="about" class="why-us padding-100 background-fullwidth background-fixed "
        style="background-image: url(<?php echo get_template_directory_uri() . '/assets/img/gray-bg.jpg'; ?>);">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 text-center" data-aos="fade-right">
                    <img src="<?php the_field('about_image'); ?>" class="img-fluid" alt="">
                </div>
                <div class="col-md-6" data-aos="fade-zoom-in" data-aos-delay="200">
                    <h3><?php the_field('about_title'); ?></h3>
                    <p><?php the_field('about_content'); ?></p>
                    <div class="space-50"></div>
                    <div class="row">
                        <?php foreach ( get_field('about_information_blocks') as $block ): ?>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-12" data-aos="zoom-in" data-aos-delay="400">
                            <div class="why-us-icon">
                                <span class="<?php echo $block['about_info_block_icon']; ?>"></span>
                                <p><?php echo $block['about_info_block_content']; ?></p>
                            </div>
                            <div class="space-25"></div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Why Us -->

    <!-- Start Main Features -->
    <section id="main_features" class="main-features padding-100">
        <div class="container">
            <div class="row">
                <div class="text-center col-12 section-title" data-aos="fade-zoom-in">
                    <?php
                    $title = get_field('feature_title');
                    $title_words = explode( ' ', trim($title) );
                    ?>
                    <h3>
                        <?php echo $title_words[0]; ?>
                        <span><?php echo strstr($title," "); ?></span>
                    </h3>
                    <div class="space-25"></div>
                    <p><?php the_field('feature_content'); ?></p>
                    <div class="space-25"></div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-3 text-lg-right left-side">
                    <?php 
                    $data_delay = 1000; 
                    foreach ( get_field('feature_left_information_blocks') as $block ): ?>
                    <div class="one-feature" data-aos="fade-right" data-aos-delay="<?php echo $data_delay; ?>">
                        <h5><?php echo $block['feature_info_block_title']; ?></h5>
                        <span class="<?php echo $block['feature_info_block_icon']; ?>"></span>
                        <p><?php echo $block['feature_info_block_content']; ?></p>
                    </div>
                    <?php $data_delay += 400; endforeach; ?>
                </div>
                <div class="col-lg-6 text-center">
                    <div class="features-circle">
                        <div class="circle-svg" data-aos="zoom-in" data-aos-delay="400">
                            <svg version="1.1" id="features_circle" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="543px"
                                height="542.953px" viewBox="0 0 543 542.953" enable-background="new 0 0 543 542.953"
                                xml:space="preserve">
                                <g>
                                    <circle fill="none" stroke="#" stroke-width="3" stroke-miterlimit="10"
                                        stroke-dasharray="11.9474,11.9474" cx="271.5" cy="271.516" r="270" />
                                    <animateTransform attributeName="transform" type="rotate" from="0" to="360"
                                        dur="50s" repeatCount="indefinite"></animateTransform>
                                </g>
                            </svg>
                        </div>
                        <img data-aos="fade-up" data-aos-delay="200" src="<?php echo the_field('feature_image'); ?>" class="img-fluid"
                            alt="">
                    </div>
                </div>
                <div class="col-lg-3 right-side">
                    <?php 
                    $data_delay = 1000; 
                    foreach ( get_field('feature_right_information_blocks') as $block ): ?>
                    <div class="one-feature" data-aos="fade-left" data-aos-delay="<?php echo $data_delay; ?>">
                        <h5><?php echo $block['feature_info_block_title']; ?></h5>
                        <span class="<?php echo $block['feature_info_block_icon']; ?>"></span>
                        <p><?php echo $block['feature_info_block_content']; ?></p>
                    </div>
                    <?php $data_delay += 400; endforeach; ?>
                </div>
            </div>
        </div>
    </section>
    <!-- End Main Features -->

    <!-- Start Other Features -->
    <section id="other_features" class="other-features padding-100 background-withcolor">
        <div class="container-fluid">
            <div class="row">
                <div class="text-center col-12 section-title" data-aos="fade-zoom-in">
                    <?php
                    $title = get_field('other_feature_title');
                    $title_words = explode( ' ', trim($title) );
                    ?>
                    <h3>
                        <?php echo $title_words[0]; ?>
                        <span class="white"><?php echo strstr($title," "); ?></span>
                    </h3>
                    <div class="space-25"></div>
                    <p><?php the_field('other_feature_content'); ?></p>
                    <div class="space-50"></div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="other-features-slider" data-aos="fade-up">
                        <?php foreach ( get_field('other_feature_information_blocks') as $block ): ?>
                        <div class="item text-center">
                            <span class="<?php echo $block['feature_info_block_icon']; ?>"></span>
                            <h4><?php echo $block['feature_info_block_title']; ?></h4>
                            <p><?php echo $block['feature_info_block_content']; ?></p>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Other Features  -->

    <!-- Start Watch Video -->
    <?php if ( !empty( get_field('video_image') ) && !empty( get_field('video_url') ) ): ?>
    <section id="watch_video" class="watch-video padding-100">
        <div class="container-fluid">
            <div class="row">
                <div class="text-center col-12 section-title" data-aos="fade-zoom-in">
                    <?php
                    $title = get_field('video_title');
                    $title_words = explode( ' ', trim($title) );
                    ?>
                    <h3>
                        <?php echo $title_words[0]; ?>
                        <span><?php echo strstr($title," "); ?></span>
                    </h3>
                    <div class="space-25"></div>
                    <p><?php the_field('video_content'); ?></p>
                    <div class="space-50"></div>
                </div>
                <div class="col-md-6 offset-md-3" data-aos="fade-up">
                    <div class="video" style="background-image: url('<?php the_field('video_image'); ?>')">
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/mobile-4-4.png'; ?>" class="img-fluid d-block mx-auto" alt="">
                        <a href="<?php the_field('video_url'); ?>" data-lity></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>
    <!-- End Watch Video  -->

    <!-- Start Screenshots -->
    <section id="screenshots" class="screenshots padding-100 background-fullwidth background-fixed"
        style="background-image: url(<?php echo get_template_directory_uri() . '/assets/img/gray-bg.jpg'; ?>);">
        <div class="container-fluid">
            <div class="row">
                <div class="text-center col-12 section-title" data-aos="fade-zoom-in">
                    <?php
                    $title = get_field('screenshots_title');
                    $title_words = explode( ' ', trim($title) );
                    ?>
                    <h3>
                        <?php echo $title_words[0]; ?>
                        <span><?php echo strstr($title," "); ?></span>
                    </h3>
                    <div class="space-25"></div>
                    <p><?php the_field('screenshots_content'); ?></p>
                    <div class="space-50"></div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="screenshots-slider" data-aos="fade-up">
                        <?php foreach ( get_field('screenshots_block') as $block ): ?>
                        <div class="item text-center">
                            <img src="<?php echo $block['screenshots_image']; ?>" class="img-fluid d-block mx-auto" alt="">
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Screenshots -->

    <!-- Start Clients Testimonial -->
    <section id="testimonial" class="clients-testimonial padding-100">
        <div class="container">
            <div class="row">
                <div class="text-center col-12 section-title" data-aos="fade-zoom-in">
                    <?php
                    $title = get_field('testimonial_title');
                    $title_words = explode( ' ', trim($title) );
                    ?>
                    <h3>
                        <?php echo $title_words[0]; ?>
                        <span><?php echo strstr($title," "); ?></span>
                    </h3>
                    <div class="space-25"></div>
                    <p><?php the_field('testimonial_content'); ?></p>
                    <div class="space-50"></div>
                </div>
                <div class="col-12">
                    <div class="testimonial-slider" data-aos="fade-up">
                        <?php foreach ( get_field('testimonial_blocks') as $block ): ?>
                        <div class="item">
                            <div class="client-testimonial">
                                <p><?php echo $block['testimonial_content']; ?></p>
                            </div>
                            <div class="client-info d-flex align-items-center">
                                <figure>
                                    <img src="<?php echo $block['testimonial_photo']; ?>" class="img-fluid" alt="">
                                </figure>
                                <div>
                                    <h3><?php echo $block['testimonial_name']; ?></h3>
                                    <h6><?php echo $block['testimonial_company']; ?></h6>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Clients Testimonial  -->

    <!-- Start Fun Facts -->
    <section id="facts" class="fun-facts padding-100 background-withcolor">
        <div class="container">
            <div class="row">
                <div class="text-center col-12 section-title" data-aos="fade-zoom-in">
                    <?php
                    $title = get_field('facts_title');
                    $title_words = explode( ' ', trim($title) );
                    ?>
                    <h3>
                        <?php echo $title_words[0]; ?>
                        <span class="white"><?php echo strstr($title," "); ?></span>
                    </h3>
                    <div class="space-25"></div>
                    <p><?php the_field('facts_content'); ?></p>
                    <div class="space-50"></div>
                </div>
            </div>
            <div class="row align-items-center">
                <?php $delay = 400;
                foreach ( get_field('facts_block') as $block ): ?>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="fact-box text-center" data-aos="fade-up" data-aos-delay="<?php echo $delay; ?>">
                        <span class="<?php echo $block['facts_icon']; ?>"></span>
                        <h5><?php echo $block['facts_sum']; ?></h5>
                        <h6><?php echo $block['facts_title']; ?></h6>
                    </div>
                </div>
                <?php $delay += 200; endforeach; ?>
            </div>
        </div>
    </section>
    <!-- End Fun Facts  -->

    <!-- Start App Price -->
    <section id="prices" class="prices padding-100">
        <div class="container">
            <div class="row">
                <div class="text-center col-12 section-title" data-aos="fade-zoom-in">
                    <?php
                    $title = get_field('price_title');
                    $title_words = explode( ' ', trim($title) );
                    ?>
                    <h3>
                        <?php echo $title_words[0]; ?>
                        <span><?php echo strstr($title," "); ?></span>
                    </h3>
                    <div class="space-25"></div>
                    <p><?php the_field('price_content'); ?></p>
                    <div class="space-50"></div>
                </div>

                <?php $delay = 400;
                foreach ( get_field('price_blocks') as $block ): ?>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="price-table text-center" data-aos="fade-right" data-aos-delay="<?php echo $delay; ?>">
                        <div class="top background-fullwidth" style="background-image: url(<?php echo get_template_directory_uri() . '/assets/img/gray-bg.jpg'; ?>);">
                          <?php if ( $block['is_it_offer'] ): ?>
                            <span class="offer"><?php echo $block['offer_text']; ?></span>
                          <?php endif; ?>
                            <h4><?php echo $block['title']; ?></h4>
                            <h3>
                                <span>$</span><?php echo $block['price']; ?>
                            </h3>
                            <h5><?php echo $block['price_per']; ?></h5>
                        </div>
                        <div class="bottom">
                            <ul>
                                <?php foreach ( $block['features'] as $feature ): ?>
                                    <li><?php echo $feature['feature']; ?></li>
                                <?php endforeach; ?>
                            </ul>
                            <div class="space-50"></div>
                            <?php if ( !empty($block['button_url']) ): ?>
                            <a href="<?php echo $block['button_url']; ?>" class="btn btn-primary btn-white btn-theme"><span><?php echo $block['button_name']; ?></span></a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <?php $delay += 400; endforeach; ?>
            </div>
        </div>
    </section>
    <!-- End App Price  -->

    <!-- Start Our Team -->
    <section id="team" class="our-team padding-100 background-fullwidth background-fixed"
        style="background-image: url(<?php echo get_template_directory_uri() . '/assets/img/gray-bg.jpg'; ?>);">
        <div class="container">
            <div class="row">
                <div class="text-center col-12 section-title" data-aos="fade-zoom-in">
                    <?php
                    $title = get_field('team_title');
                    $title_words = explode( ' ', trim($title) );
                    ?>
                    <h3>
                        <?php echo $title_words[0]; ?>
                        <span><?php echo strstr($title," "); ?></span>
                    </h3>
                    <div class="space-25"></div>
                    <p><?php the_field('team_content'); ?></p>
                    <div class="space-50"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="team-slider" data-aos="fade-up">
                        <?php foreach ( get_field('team_blocks') as $block ): ?>
                        <div class="item person text-center">
                            <img src="<?php echo $block['photo']; ?>" class="img-fluid d-block mx-auto" alt="">
                            <div class="space-20"></div>
                            <h3><?php echo $block['name']; ?></h3>
                            <div class="space-20"></div>
                            <h5><?php echo $block['position']; ?></h5>
                            <div class="space-20"></div>
                            <p><?php echo $block['content']; ?></p>
                            <ul>
                                <?php foreach ( $block['social_activities'] as $social_activity ) : ?>
                                <li>
                                    <a href="<?php echo $social_activity['link']; ?>">
                                        <i class="<?php echo $social_activity['icon']; ?>"></i>
                                    </a>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Our Team -->

    <!-- Start FAQ -->
    <section id="faq" class="faq padding-100">
        <div class="container">
            <div class="row">
                <div class="text-center col-12 section-title" data-aos="fade-zoom-in">
                    <?php
                    $title = get_field('faq_title');
                    $title_words = explode( ' ', trim($title) );
                    ?>
                    <h3>
                        <?php echo $title_words[0]; ?>
                        <span><?php echo strstr($title," "); ?></span>
                    </h3>
                    <div class="space-25"></div>
                    <p><?php the_field('faq_content'); ?></p>
                    <div class="space-50"></div>
                </div>
            </div>
            <div class="row align-items-center">
                <!--align-items-center-->
                <div class="col-md-8 col-12" data-aos="fade-right">
                    <div class="accordion" id="faqAccordion">

                        <?php $i = 0;
                        foreach ( get_field('faq_blocks') as $block ): ?>
                        <div class="card shadow">
                            <div class="card-header" id="heading_<?php echo $i; ?>">
                                <h5 class="mb-0">
                                    <button class="btn btn-link <?php if ($i > 0) echo 'collapsed' ?>" type="button" data-toggle="collapse"
                                        data-target="#collapse_<?php echo $i; ?>" aria-expanded="true" aria-controls="collapse_<?php echo $i; ?>">
                                        <?php echo $block['title']; ?>
                                    </button>
                                </h5>
                            </div>

                            <div id="collapse_<?php echo $i; ?>" class="collapse <?php if ($i == 0) echo ' show'; ?>" aria-labelledby="heading_<?php echo $i; ?>"
                                data-parent="#faqAccordion">
                                <div class="card-body">
                                    <?php echo $block['content']; ?>
                                </div>
                            </div>
                        </div>
                        <?php $i += 1; endforeach; ?>
                    </div>
                </div>
                <div class="col-md-4 col-12" data-aos="fade-left" data-aos-delay="400">
                    <img src="<?php the_field('faq_image'); ?>" class="img-fluid b-block mx-auto" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- End FAQ  -->

    <!-- Start Fun Facts -->
    <section id="logos" class="logos background-withcolor">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="logos-slider">
                        <?php foreach ( get_field('logo_repeater') as $block ): ?>
                            <div class="item">
                                <img src="<?php echo $block['logo']; ?>" class="img-fluid mx-auto b-block" alt="">
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Fun Facts  -->

    <!-- Start Recent News -->
    <section id="recent_news" class="recent-news padding-100">
        <div class="container">
            <div class="row">
                <div class="text-center col-12 section-title" data-aos="fade-zoom-in">
                    <?php
                    $title = get_field('news_title');
                    $title_words = explode( ' ', trim($title) );
                    ?>
                    <h3>
                        <?php echo $title_words[0]; ?>
                        <span><?php echo strstr($title," "); ?></span>
                    </h3>
                    <div class="space-25"></div>
                    <p><?php the_field('news_content'); ?></p>
                    <div class="space-50"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="recent-news-slider" data-aos="fade-up">

                        <?php query_posts( array(
                        'category_name' => 'news',
                        'posts_per_page' => 3,
                        )); ?>

                        <?php $tmp_post = $post; if( have_posts() ): while ( have_posts() ) : the_post(); ?>

                        <div class="item">
                            <div class="row align-items-center">
                                <div class="col-md-6 col-12">
                                    <?php if ( empty( get_field('post_image') ) ){ ?>
                                        <img src="https://via.placeholder.com/540x335" class="img-fluid" alt="">
                                    <?php } else { ?>
                                        <img src="<?php the_field('post_image'); ?>" class="img-fluid" alt="">
                                    <?php } ?>
                                </div>
                                <div class="col-md-6 col-12">
                                    <h3><?php the_title(); ?></h3>
                                    <div class="space-15"></div>
                                    <p><?php the_content(); ?></p>
                                    <div class="space-15"></div>
                                    <ul class="news-meta">
                                        <li>
                                            <span class="lnr lnr-user"></span> By <?php the_author(); ?></li>
                                        <li>
                                            <span class="lnr lnr-clock"></span> <?php the_date('F d, Y'); ?></li>
                                    </ul>
                                    <div class="space-15"></div>
                                    <a href="<?php the_permalink(); ?>"
                                        class="btn btn-primary shadow btn-colord btn-theme"><span>Read
                                            More</span></a>
                                </div>
                            </div>
                        </div>

                        <?php endwhile; wp_reset_postdata(); $post = $tmp_post;?>

                        <?php else : ?>

                        <p><?php __('No News'); ?></p>

                        <?php endif; ?>

                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End Recent News  -->

    <!-- Start Download App -->
    <section id="download_app" class="download-app padding-100 pb-0 background-fullwidth background-fixed"
        style="background-image: url(<?php echo get_template_directory_uri() . '/assets/img/gray-bg.jpg'; ?>);">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12" data-aos="fade-right">
                    <h2><?php the_field('app_title'); ?></h2>
                    <p><?php the_field('app_content'); ?></p>
                    <?php if ( !empty(get_field('app_store_link')) ) { ?>
                    <a href="<?php the_field('app_store_link'); ?>" class="btn btn-primary shadow btn-colord btn-theme" tabindex="0">
                        <i class="fab fa-apple"></i>
                        <span>
                            <?php if ( !empty(get_field('app_store_name')) ): the_field('app_store_name'); ?>
                            <br>
                            <?php endif; ?>
                        APP STORE</span>
                    </a>
                    <?php } if ( !empty(get_field('google_play_link')) ) { ?>
                    <a href="<?php the_field('google_play_link'); ?>" class="btn btn-primary shadow  btn-colord btn-theme" tabindex="0">
                        <i class="fab fa-google-play"></i>
                        <span>
                            <?php if ( !empty(get_field('google_play_name')) ): the_field('google_play_name'); ?>
                            <br>
                            <?php endif; ?>

                        GOOGLE PLAY</span>
                    </a>
                    <?php } ?>
                </div>
                <div class="col-lg-6 col-12" data-aos="fade-left" data-aos-delay="400">
                    <img src="<?php the_field('app_image'); ?>" class="img-fluid d-block mx-auto" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- End Download App -->

    <!-- Start  Git in touch -->
    <section id="git_in_touch" class="git-in-touch padding-100">
        <div class="container">
            <div class="row">
                <div class="text-center col-12 section-title" data-aos="fade-zoom-in">
                    <?php
                    $title = get_field('contact_us_title');
                    $title_words = explode( ' ', trim($title) );
                    ?>
                    <h3>
                        <?php echo $title_words[0]; ?>
                        <span><?php echo strstr($title," "); ?></span>
                    </h3>
                    <div class="space-50"></div>
                </div>
            </div>
            <form data-aos="fade-up">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="<?php the_field('contact_us_enter_your_name'); ?>">
                            <span class="focus-border"></span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="<?php the_field('contact_us_enter_your_email'); ?>">
                            <span class="focus-border"></span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="<?php the_field('contact_us_enter_your_subject'); ?>">
                            <span class="focus-border"></span>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <textarea class="form-control" rows="4" placeholder="<?php the_field('contact_us_enter_your_message'); ?>"></textarea>
                            <span class="focus-border"></span>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="space-25"></div>
                        <button type="submit" class="btn btn-primary shadow btn-colord btn-theme"><span><?php the_field('contact_us_send_button'); ?></span></button>
                    </div>
                </div>
            </form>
            <div class="space-50"></div>
            <div class="row contact-info">
                <div class="col-md-4 col-12 text-center">
                    <div class="info-box" data-aos="fade-right" data-aos-delay="400">
                        <span class="lnr lnr-map-marker"></span>
                        <h5><?php the_field('contact_us_address'); ?></h5>
                    </div>
                </div>
                <div class="col-md-4 col-12 text-center">
                    <div class="info-box" data-aos="fade-up" data-aos-delay="800">
                        <span class="lnr lnr-phone"></span>
                        <?php foreach ( get_field('contact_us_phones') as $num ): ?>
                        <h5><?php echo $num['phone']; ?></h5>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="col-md-4 col-12 text-center">
                    <div class="info-box" data-aos="fade-left" data-aos-delay="1200">
                        <span class="lnr lnr-envelope"></span>
                        <?php foreach ( get_field('contact_us_emails') as $email ): ?>
                            <a href="mailto:<?php echo $email['email']; ?>"><?php echo $email['email']; ?></a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End  Git in touch  -->

<?php get_footer(); ?>