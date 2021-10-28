<?php the_post(); get_header(); ?>
    <!-- Start Page Head -->
    <section class="page-head background-withcolor">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12">
                    <h1>News</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- End Page Head -->

    <!-- Start Blog Page Section -->
    <section class="single-blog-with-sidebar single-blog-page padding-100">
        <div class="container">
            <div class="row">
                <!-- Start All Blogs -->
                <div class="col-md-12 col-lg-8">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="blog-box">
                                <div class="blog-img">
                                    <?php if ( empty( get_field('post_image') ) ){ ?>
                                        <img src="https://via.placeholder.com/730x467" class="img-fluid" alt="">
                                    <?php } else { ?>
                                        <img src="<?php the_field('post_image'); ?>" class="img-fluid" alt="">
                                    <?php } ?>
                                </div>
                                <div class="blog-details">
                                    <div class="space-15"></div>
                                    <h3><?php the_title(); ?></h3>
                                    <div class="space-15"></div>
                                    <ul class="news-meta">
                                        <li><span class="lnr lnr-user"></span> By <?php echo get_the_author(); ?></li>
                                        <li><span class="lnr lnr-clock"></span> <?php the_date('F d, Y'); ?></li>
                                    </ul>
                                    <div class="space-15"></div>
                                    <p><?php the_content(); ?></p>

                                </div>
                                <hr>
                                <div class="post-tag-area d-md-flex justify-content-between align-items-center">
                                    <ul class="share-icon">
                                        <li>Share:</li>
                                        <li><a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                    </ul>
                                    <?php $tags = wp_get_post_tags($post->ID);
                                    if ($tags) { ?>
                                    <ul class="tags">
                                        <li>Tags:</li>
                                        <?php
                                            $tags_counter = 3;
                                            $tags_string = '';
                                            foreach ($tags as $tag) {
                                                if ($tags_counter) {
                                                    $tags_string .= ' <li><a href="'. '#' /*$tag->slug*/ .'">'.$tag->name.', </a></li> ';
                                                    $tags_counter--;
                                                } else {
                                                    break;
                                                }
                                            }
                                            echo rtrim($tags_string) . '...'; ?>
                                    </ul>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="comments-container">
                                <h3>3 Comments In This Topic</h3>
                                <div class="space-15"></div>
                                <ul class="comments-list">
                                    <li class="d-flex align-items-top">
                                        <figure>
                                            <img src="https://via.placeholder.com/80x80" class="img-fluid" alt="">
                                        </figure>
                                        <div>
                                            <h4>Mohamed Kamel</h4>
                                            <h6>01 October 2018</h6>
                                            <p>There are many variations of passages of Lorem Ipsum available, but the
                                                majority have suffered alteration in some form, by injected humour</p>
                                            <a href="#" class="reply"><i class="fas fa-reply"></i> Reply</a>
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-top comment-reply">
                                        <figure>
                                            <img src="https://via.placeholder.com/80x80" class="img-fluid" alt="">
                                        </figure>
                                        <div>
                                            <h4>John Doe</h4>
                                            <h6>01 October 2018</h6>
                                            <p>Cras blandit eros id enim efficitur, et aliquam sem venenatis. Morbi
                                                suscipit libero nunc, quis molestie enim tincidunt non. Phasellus
                                                consectetur</p>
                                            <a href="#" class="reply"><i class="fas fa-reply"></i> Reply</a>
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-top">
                                        <figure>
                                            <img src="https://via.placeholder.com/80x80" class="img-fluid" alt="">
                                        </figure>
                                        <div>
                                            <h4>Mohamed Kamel</h4>
                                            <h6>01 October 2018</h6>
                                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                                                dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                            </p>
                                            <a href="#" class="reply"><i class="fas fa-reply"></i> Reply</a>
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-top">
                                        <figure>
                                            <img src="https://via.placeholder.com/80x80" class="img-fluid" alt="">
                                        </figure>
                                        <div>
                                            <h4>John Doe</h4>
                                            <h6>01 October 2018</h6>
                                            <p>Cras blandit eros id enim efficitur, et aliquam sem venenatis. Morbi
                                                suscipit libero nunc, quis molestie enim tincidunt non. Phasellus
                                                consectetur</p>
                                            <a href="#" class="reply"><i class="fas fa-reply"></i> Reply</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="comments-form">
                                <h3>Leave A Reply</h3>
                                <div class="space-15"></div>
                                <form>
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="Enter Your Name">
                                                    <span class="focus-border"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <input type="email" class="form-control"
                                                        placeholder="Enter Your Email">
                                                    <span class="focus-border"></span>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <textarea class="form-control" rows="4"
                                                        placeholder="Enter Your Message"></textarea>
                                                    <span class="focus-border"></span>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="space-25"></div>
                                                <button type="submit"
                                                    class="btn btn-primary shadow btn-colord btn-theme"><span>Post
                                                        Comment</span></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End All Blogs -->

                <!-- Start Sidebar -->
                <div class="col-md-12 col-lg-4">
                    <aside class="sidebar">
                        <div class="gray-panel search">
                            <form>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Search">
                                    <span class="focus-border"></span>
                                </div>
                            </form>
                        </div>
                        <div class="gray-panel follow-me">
                            <h3>Follow Me</h3>
                            <ul>
                                <li class="facebook">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li class="instagram">
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </li>
                                <li class="linkedin">
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                </li>
                                <li class="twitter">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="gray-panel categories">
                            <h3>Categories</h3>
                            <ul>
                                <?php $categories = get_categories();
                                    foreach ($categories as $category) { ?>
                                        <?php echo '<li><a href="'. '#' /*$category->slug*/.'">'.$category->name.'</a></li>'; 
                                    } 
                                ?>
                            </ul>
                        </div>

                        <div class="gray-panel recent-post">
                            <h3>Recent Post</h3>

                            <?php query_posts( array(
                            'category_name' => 'news',
                            'posts_per_page' => 3,
                            )); ?>

                            <?php $tmp_post = $post; if( have_posts() ): while ( have_posts() ) : the_post(); 
                            if ( get_the_ID() != $tmp_post->ID ): ?>
                            <div class="post d-flex align-items-top">
                                <figure>
                                    <a href="#"><img src="https://via.placeholder.com/80x80" class="img-fluid" alt=""></a>
                                </figure>
                                <div>
                                    <h4><a href="#"><?php the_title(); ?></a></h4>
                                    <ul class="news-meta">
                                        <li><span class="lnr lnr-clock"></span> <?php the_date('F d, Y'); ?></li>
                                    </ul>
                                </div>
                            </div>
                            <?php endif; endwhile; endif; wp_reset_postdata(); $post = $tmp_post;?>
                        </div>
                        <div class="gray-panel tags">
                            <h3>Tags</h3>
                            <ul>
                                <?php $tags = get_tags();
                                    foreach ($tags as $tag) { ?>
                                        <?php echo '<li><a href="'. '#' /*$tag->slug*/.'">'.$tag->name.'</a></li>'; 
                                    } 
                                ?>
                            </ul>
                        </div>
                    </aside>
                </div>
                <!-- End Sidebar -->

            </div>
        </div>
    </section>
    <!-- Start Blog Page Section -->
<?php get_footer(); ?>