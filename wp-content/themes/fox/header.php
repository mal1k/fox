<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php if ( is_singular() && get_option( 'thread_comments') ) wp_enqueue_script( 'comment-reply' ); ?>
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- Favicon -->
    <link rel="icon" href="<?php echo get_template_directory_uri() . '/assets/img/favicon.png'; ?>">
    <!-- Bootstrap CSS -->
    <link href="<?php echo get_template_directory_uri() . '/assets/css/bootstrap.min.css'; ?>" rel="stylesheet">

    <!-- Slick Slider -->
    <link href="<?php echo get_template_directory_uri() . '/assets/css/slick.css'; ?>" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri() . '/assets/css/slick-theme.css'; ?>" rel="stylesheet">

    <!-- AOS CSS -->
    <link href="<?php echo get_template_directory_uri() . '/assets/css/aos.css'; ?>" rel="stylesheet">

    <!-- Lity CSS -->
    <link href="<?php echo get_template_directory_uri() . '/assets/css/lity.min.css'; ?>" rel="stylesheet">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/assets/css/fontawesome-all.min.css'; ?>">

    <!-- linearicons CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/assets/css/linearicons.css'; ?>">

    <!-- Our Min CSS -->
    <link href="<?php echo get_template_directory_uri() . '/assets/css/main.css'; ?>" rel="stylesheet">

    <!-- Themes * You can select your color from color-1 , color-2 , color-3 , color-4 , ..etc * -->
    <link href="<?php echo get_template_directory_uri() . '/assets/css/color-black.css'; ?>" rel="stylesheet">

    <title><?php bloginfo( 'name' ); ?><?php wp_title( '&mdash;' ); ?></title>
    <?php if ( is_singular() && get_option( 'thread_comments') ) wp_enqueue_script( 'comment-reply' ); ?>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> data-spy="scroll" data-target="#main_menu" data-offset="70">
    <!-- Start Preloader -->
    <div class="preloader">
        <div class="loader-wrapper">
            <div class="loader"></div>
        </div>
    </div>
    <!-- End Preloader -->

    <!-- Start Header -->
    <header class="foxapp-header">
        <nav class="navbar navbar-expand-lg navbar-light" id="foxapp_menu">
            <div class="container">
                <a class="navbar-brand" href="<?php echo home_url(); ?>">
                <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_menu"
                    aria-controls="main_menu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="main_menu">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link anchor" href="<?php if ( get_option('page_on_front') != get_the_ID() ) { echo home_url().'?'; }?>#slide"><?php the_field('menu_home', get_option('page_on_front')); ?>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link anchor" href="<?php if ( get_option('page_on_front') != get_the_ID() ) { echo home_url().'?'; }?>#about"><?php the_field('menu_about', get_option('page_on_front')); ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link anchor" href="<?php if ( get_option('page_on_front') != get_the_ID() ) { echo home_url().'?'; }?>#main_features"><?php the_field('menu_features', get_option('page_on_front')); ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link anchor" href="<?php if ( get_option('page_on_front') != get_the_ID() ) { echo home_url().'?'; }?>#screenshots"><?php the_field('menu_screenshots', get_option('page_on_front')); ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link anchor" href="<?php if ( get_option('page_on_front') != get_the_ID() ) { echo home_url().'?'; }?>#team"><?php the_field('menu_team', get_option('page_on_front')); ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link anchor" href="<?php if ( get_option('page_on_front') != get_the_ID() ) { echo home_url().'?'; }?>#recent_news"><?php the_field('menu_news', get_option('page_on_front')); ?></a>
                        </li>
                        <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                News
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item anchor" href="#recent_news">Recent News</a>
                                <a class="dropdown-item anchor" href="news-without-sidebar.html">News One</a>
                                <a class="dropdown-item anchor" href="news-with-sidebar.html">News Two</a>
                                <a class="dropdown-item anchor" href="news-with-sidebar-one-col.html">News Three</a>
                                <a class="dropdown-item anchor" href="news-single.html">Single News</a>
                            </div>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link anchor" href="<?php if ( get_option('page_on_front') != get_the_ID() ) { echo home_url().'?'; }?>#git_in_touch"><?php the_field('menu_contact', get_option('page_on_front')); ?></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- End Header -->