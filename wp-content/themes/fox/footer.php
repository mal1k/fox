<!-- Start  Map -->
<section class="map">
<?php the_field('google_map', get_option('page_on_front')); ?>
</section>
    <!-- End  Map  -->

    <!-- Start  Footer -->
    <footer class="padding-100 pb-0">
      <?php if ( !empty(get_field('subscribe_placeholder', get_option('page_on_front'))) && !empty(get_field('subscribe_button_name', get_option('page_on_front'))) ): ?>
        <div class="subscribe">
            <div class="container">
                <form class="subscribe-form row m-0 align-items-center">
                    <div class="col-lg-9 col-md-8">
                        <div class="form-group mb-0">
                            <input type="text" class="form-control" placeholder="<?php the_field('subscribe_placeholder', get_option('page_on_front')); ?>">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <a href="#"
                            class="btn btn-primary shadow d-block btn-colord btn-theme"><span><?php the_field('subscribe_button_name', get_option('page_on_front')); ?></span></a>
                    </div>
                </form>
            </div>
        </div>
        <?php endif; ?>
        <div class="space-50"></div>
        <div class="footer-widgets">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="widget">
                            <img src="<?php header_image(); ?>" class="img-fluid" alt="">
                            <p><?php echo get_bloginfo('description'); ?></p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="widget">
                            <h6><?php the_field('quick_links_tab_name', get_option('page_on_front')); ?></h6>
                            <ul>
                                <?php foreach ( get_field('quick_links', get_option('page_on_front')) as $media ): ?>
                                <li>
                                    <a href="<?php echo $media['url']; ?>"><?php echo $media['name']; ?></a>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="widget">
                            <h6><?php the_field('social_media_tab_name', get_option('page_on_front')); ?></h6>
                            <ul>
                                <?php foreach ( get_field('social_media', get_option('page_on_front')) as $media ): ?>
                                <li>
                                    <a href="<?php echo $media['url']; ?>"><?php echo $media['name']; ?></a>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="widget">
                            <h6><?php the_field('quick_contact_tab_name', get_option('page_on_front')); ?></h6>
                            <ul>
                                <li>
                                    <span><?php the_field('quick_contact_phone', get_option('page_on_front')); ?></span>
                                    <?php echo get_field('contact_us_phones', get_option('page_on_front'))[0]['phone']; ?>
                                </li>
                                <li>
                                    <span><?php the_field('quick_contact_email', get_option('page_on_front')); ?></span>
                                    <a href="mailto:info@yourcompany.com"></a><?php echo get_field('contact_us_emails', get_option('page_on_front'))[0]['email']; ?></li>
                                <li>
                                    <span><?php the_field('quick_contact_address', get_option('page_on_front')); ?></span>
                                    <?php the_field('contact_us_address', get_option('page_on_front')); ?></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="space-50"></div>
        <div class="copyright">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-4">
                        <p>All rights reserved © <a href="#"><?php echo get_bloginfo('title'); ?></a>, <?php echo date('Y'); ?></p>
                    </div>
                    <div class="offset-md-4 col-md-4">
                        <ul class="nav justify-content-end">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Terms and Conditions</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Privacy Policy</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End  Footer  -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo get_template_directory_uri() . '/assets/js/jquery-3.3.1.min.js'; ?>"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- Bootstrap JS -->
    <script src="<?php echo get_template_directory_uri() . '/assets/js/popper.min.js'; ?>"></script>
    <script src="<?php echo get_template_directory_uri() . '/assets/js/bootstrap.min.js'; ?>"></script>

    <!-- svg -->
    <script src="https://cdn.linearicons.com/free/1.0.0/svgembedder.min.js"></script>

    <!-- Slick Slider JS -->
    <script src="<?php echo get_template_directory_uri() . '/assets/js/slick.min.js'; ?>"></script>

    <!-- Counterup JS -->
    <script src="<?php echo get_template_directory_uri() . '/assets/js/waypoints.min.js'; ?>"></script>
    <script src="<?php echo get_template_directory_uri() . '/assets/js/jquery.counterup.js'; ?>"></script>

    <!-- AOS JS -->
    <script src="<?php echo get_template_directory_uri() . '/assets/js/aos.js'; ?>"></script>

    <!-- lity JS -->
    <script src="<?php echo get_template_directory_uri() . '/assets/js/lity.min.js'; ?>"></script>

    <!-- Our Main JS -->
    <script src="<?php echo get_template_directory_uri() . '/assets/js/main.js'; ?>"></script>
    <?php wp_footer(); ?>
</body>

</html>