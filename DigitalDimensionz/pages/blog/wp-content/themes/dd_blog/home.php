<?php get_header(); ?>
<!-- ========== Blog - 1 Column ========== -->
<div id="blog" class="section container blog-classic">
    <div class="row">
        <div class="col-md-8">
            <!-- WPLoop start -->
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <!-- Blog Post 1 -->
                    <div class="col-md-12">
                        <div class="blog-post wow fadeIn" data-wow-delay=".1s" data-wow-duration="2s">
                            <!-- Image -->
                            <a href="blog-post.html" class="post-img">
                                <!--    <img src="http://placehold.it/750x400" alt="Blog Post 1">-->
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail(); ?>
                                <?php endif; ?>
                            </a>
                            <div class="bp-content">
                                <!-- Meta data -->
                                <div class="post-meta">
                                    <a href="#" class="post-date">
                                        <i class="fa fa-calendar-o"></i>
                                        <span><?php the_time('F j, Y g:i'); ?></span>
                                    </a>
                                    <a href="<?php echo comments_link(); ?>" class="post-comments">
                                        <i class="fa fa-comments-o"></i>
                                        <span><?php comments_number(); ?></span>
                                    </a>
                                </div><!-- / .meta -->
                                <!-- Post Title -->
                                <a href="<?php  the_permalink(); ?>" class="post-title"><h3><?php the_title(); ?></h3></a>
                                <!-- Blurb -->
                                <p> <?php the_excerpt(); ?> </p>
                                <!-- Link -->
                                <a href="<?php the_permalink(); ?>" class="btn btn-small">Read More</a>
                            </div><!-- / .bp-content -->
                        </div><!-- / .blog-post -->
                    </div>
                    <!-- / .col-md-12 -->
                <?php endwhile; ?>
            <?php else: ?>
                <p><?php _('No POst Found'); ?></p>
            <?php endif; ?>
            <!-- WPLoop end -->
            <!-- Blog Post 2 -->
            <div class="col-md-12">
                <div class="blog-post wow fadeIn" data-wow-delay=".1s" data-wow-duration="2s">
                    <!-- Image -->
                    <a href="blog-post.html" class="post-img"><img src="http://placehold.it/750x400" alt="Blog Post 2"></a>
                    <div class="bp-content">
                        <!-- Meta data -->
                        <div class="post-meta">
                            <a href="#" class="post-date">
                                <i class="fa fa-calendar-o"></i>
                                <span><?php get_the_date(); ?></span>
                            </a>
                            <a href="#" class="post-comments">
                                <i class="fa fa-comments-o"></i>
                                <span>12</span>
                            </a>
                        </div><!-- / .meta -->
                        <!-- Post Title -->
                        <a href="blog-post.html" class="post-title"><h3>Blog Post Title</h3></a>
                        <!-- Blurb -->
                        <p>Lorem ipsum dolor sit amet, tempor consectetur adipisicing elit, sed do eiusmod incididunt ut labore et dolore magna aliqua. Ut enim ad ...</p>
                        <!-- Link -->
                        <a href="blog-post.html" class="btn btn-small">Read More</a>
                    </div><!-- / .bp-content -->
                </div><!-- / .blog-post -->
            </div><!-- / .col-md-12 -->
            <!-- Blog Post 3 -->
            <div class="col-md-12">
                <div class="blog-post wow fadeIn" data-wow-delay=".1s" data-wow-duration="2s">
                    <!-- Video | 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/k_okcNVZqqI" allowfullscreen></iframe>
                    </div>
                    <div class="bp-content">
                        <!-- Meta data -->
                        <div class="post-meta">
                            <a href="#" class="post-date">
                                <i class="fa fa-calendar-o"></i>
                                <span>August 01.2015</span>
                            </a>
                            <a href="#" class="post-comments">
                                <i class="fa fa-comments-o"></i>
                                <span>12</span>
                            </a>
                        </div><!-- / .meta -->
                        <!-- Post Title -->
                        <a href="blog-post.html" class="post-title"><h3>Blog Post Title</h3></a>
                        <!-- Blurb -->
                        <p>Lorem ipsum dolor sit amet, tempor consectetur adipisicing elit, sed do eiusmod incididunt ut labore et dolore magna aliqua. Ut enim ad ...</p>
                        <!-- Link -->
                        <a href="blog-post.html" class="btn btn-small">Read More</a>
                    </div><!-- / .bp-content -->
                </div><!-- / .blog-post -->
            </div><!-- / .col-md-12 -->
            <!-- Blog Post 4 -->
            <div class="col-md-12">
                <div class="blog-post wow fadeIn" data-wow-delay=".1s" data-wow-duration="2s">

                    <!-- Audio (soundcloud) -->
                    <iframe width="100%" height="166" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/213984415&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>

                    <div class="bp-content">
                        <!-- Meta data -->
                        <div class="post-meta">
                            <a href="#" class="post-date">
                                <i class="fa fa-calendar-o"></i>
                                <span>August 01.2015</span>
                            </a>
                            <a href="#" class="post-comments">
                                <i class="fa fa-comments-o"></i>
                                <span>12</span>
                            </a>
                        </div><!-- / .meta -->
                        <!-- Post Title -->
                        <a href="blog-post.html" class="post-title"><h3>Blog Post Title</h3></a>
                        <!-- Blurb -->
                        <p>Lorem ipsum dolor sit amet, tempor consectetur adipisicing elit, sed do eiusmod incididunt ut labore et dolore magna aliqua. Ut enim ad ...</p>
                        <!-- Link -->
                        <a href="blog-post.html" class="btn btn-small">Read More</a>

                    </div><!-- / .bp-content -->

                </div><!-- / .blog-post -->
            </div><!-- / .col-md-12 -->
            <!-- Pagination -->
            <nav class="blog-pagination mb-sm-100">
                <ul class="pagination">
                    <li>
                        <a href="#" aria-label="Previous">
                            <span aria-hidden="true"><i class="fa fa-angle-double-left"></i></span>
                        </a>
                    </li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">...</a></li>
                    <li><a href="#">7</a></li>
                    <li>
                        <a href="#" aria-label="Next">
                            <span aria-hidden="true"><i class="fa fa-angle-double-right"></i></span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div><!-- / .col-md-8 -->
        <!-- ========== Sidebar ========== -->
                <?php get_sidebar(); ?>
    </div><!-- / .row -->
</div><!-- / .container -->
    <?php get_footer(); ?>
<!-- ========== Footer ========== -->
<?php wp_footer(); ?>
<!-- Definity JS -->

