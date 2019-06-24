<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<!-- ========== Single Blog Post ========== -->
<div id="blog" class="section container blog-classic">
    <div class="row">
        <div class="col-md-8 mb-sm-160">
            <!-- Blog Post -->
            <div class="col-md-12 blog-post-single wow fadeIn" data-wow-delay=".1s" data-wow-duration="2s">
                <!-- Image -->
<!--                <img class="img-responsive post-img" src="http://placehold.it/750x400" alt="Blog Post 1">-->
                <img class="img-responsive post-img" src="<?php
                $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                echo $feat_image;
                ?>" alt="Blog Post 1">
                <!-- Meta data -->
                <div class="post-meta">
                    <a href="#" class="post-date">
                        <i class="fa fa-calendar-o"></i>
                        <span><?php the_time('F j, Y g:i'); ?></span>
                    </a>
                    <a href="#" class="post-comments">
                        <i class="fa fa-comments-o"></i>
                        <span>
                        <?php comments_number(); ?>
                        </span>
                    </a>
                </div><!-- / .meta -->
                <!-- Title -->
                <h2 class="post-title"><?php the_title(); ?></h2>
                <div class="blog-post-content">
                    <!-- Intro -->
                    <blockquote>
                        <?php the_content(); ?>
                    </blockquote>
                    <p>
                        <?php the_field('subheader'); ?>
                    </p>


                </div>

            </div><!-- / .blog-post-single -->



            <!-- ========== Comments ========== -->

            <?php wp_list_comments(
                    array(
                            'style' => 'ol',
                            'short_ping' => 'true'
                    )
            )  ?>
            
            <div class="row">
                <div class="col-md-12 blog-post-comments">
                    <h4 class="blog-section-title"> <span>(<?php comments_number(); ?>)</span></h4>



                                    <?php
                                        if ( comments_open() || get_comments_number() ) :
                                            comments_template();
                                        endif;
                                    ?>
                    <!-- / .bp-comment -->
                    <!-- Leave a comment -->
            <!--        <div class="comment-form">
                        <h4 class="blog-section-title">Leave a comment</h4>

                        <form action="post">
                            <div class="col-md-6 form-group no-gap-left">
                                <input type="text" class="form-control" id="inpt-name-forms" placeholder="Enter your name">
                                <label for="inpt-name-forms">Name *</label>
                            </div>

                            <div class="col-md-6 form-group no-gap-right">
                                <input type="email" class="form-control" id="inpt-email-forms" placeholder="Enter your email">
                                <label for="inpt-email-forms">Email *</label>
                            </div>

                            <div class="col-md-12 form-group no-gap">
                                <input type="url" class="form-control" id="inpt-web-forms" placeholder="http://...">
                                <label for="inpt-name-forms">Website</label>
                            </div>

                            <div class="col-md-12 form-group no-gap">
                                <textarea class="form-control" name="textarea" id="txt-forms" rows="5" placeholder="Your Comment"></textarea>
                                <label for="txt-forms">Comment *</label>
                            </div>

                            <input type="submit" value="Send Comment" class="btn pull-right">
                        </form>
                    </div>-->
                <?php echo get_the_title(); ?>

                    <?php
                    $comments_args = array(
                        // change the title of send button
                        'author' =>

                            '<p class="comment-form-author">' .

                            '<label for="author"> NAME </label> ' .


                            '<input id="author" name="author" type="text" value="helo" size="30" /></p>',

                        'label_submit'=>'Submit',
	                    // submit btn class
                        'class_submit'=>'btn',
                        // change the title of the reply section
                        'title_reply'=>'Write a Reply or Comment',
                        // remove "Text or HTML to be displayed after the set of comment fields"
                        'comment_notes_after' => '',
                        // redefine your own textarea (the comment body)
                        'comment_field' => '<p class="comment-form-comment"><label for="comment">' . _x( 'Comment', 'noun' ) . '</label><br /><textarea id="comment" name="comment" aria-required="true" cols="100" rows="10"></textarea></p>',
                    );

                    comment_form($comments_args);
                    ?>
                </div>
            </div>
            <!-- / .row -->
            <!-- Post Navigation -->
            <div class="row">
                <nav class="blog-post-nav">
	                <?php previous_post_link( ' %link', '< Previous Post '); ?>
                    <?php next_post_link('%link ', 'Next Post >'); ?>
                </nav>
            </div>

        </div><!-- / .col-md-8 -->
        <!-- ========== Sidebar ========== -->
        <?php get_sidebar(); ?>
    </div><!-- / .row -->
</div><!-- / .container -->
<!-- ========== Footer ========== -->
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>
