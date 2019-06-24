
<aside class="col-md-offset-1 col-md-3 sidebar">

    <!-- Search - Widget -->
    <div class="col-md-12 ws-s search-widget">
        <div class="form-group">
            <input type="search" placeholder="Search ..." class="form-control">
            <button class="inside-input-btn"><i class="fa fa-search"></i></button>
        </div>
    </div>


    <!-- Tags - Widget -->
    <div class="col-md-12 ws-s tags-widget">
        <h5 class="header-widget">Tags</h5>
        <ul class="tag-list">
	        <?php the_tags('<li>',' ','</li>'); ?>

            <!--<li><a href="#">Photography</a></li>
            <li><a href="#">Design</a></li>
            <li><a href="#">Development</a></li>
            <li><a href="#">PHP</a></li>
            <li><a href="#">UI/UX</a></li>
            <li><a href="#">Design</a></li>
            <li><a href="#">HTML5</a></li>
            <li><a href="#">CSS3</a></li>
            <li><a href="#">iOS</a></li>-->
        </ul>


    </div>


    <!-- Recent Posts - Widget -->
    <div class="col-md-12 ws-s recent-posts-widget">
        <h5 class="header-widget">Recent Posts</h5>
	    <?php
	    $recent_posts = wp_get_recent_posts();
	    foreach( $recent_posts as $recent ){
		    echo '<div class="widget-item"> <a href="' . get_permalink($recent["ID"]) .'"><h6 class="h-alt">' . $recent["post_name"] . '</h6></a></div>';
		    error_log(print_r($recent,true));
	    }
	    wp_reset_query();
	    ?>
    </div><!-- / .recent-posts-widget -->


    <!-- Categories - Widget -->
    <div class="col-md-12 ws-s categories-widget">
        <h5 class="header-widget">Categories</h5>

        <?php wp_list_categories(); ?>


     <!--   <div class="widget-item">
            <a href="#">Web Design - <span>15</span></a>
        </div>

        <div class="widget-item">
            <a href="#">Graphic Design - <span>6</span></a>
        </div>

        <div class="widget-item">
            <a href="#">iOS Development - <span>12</span></a>
        </div>

        <div class="widget-item">
            <a href="#">Other - <span>3</span></a>
        </div>-->

    </div><!-- / .categories-widget -->


    <!-- Comments - Widget -->
    <div class="col-md-12 ws-s comments-widget">
        <h5 class="header-widget">Comments</h5>

        <?php wp_list_comments(); ?>
     <!--
        <div class="widget-item">
            <span><a href="#">Jon Doe</a> on <a href="#" class="widget-comm-title">Lorem ipsum dolor sit amet</a></span>
        </div>

        <div class="widget-item">
            <span><a href="#">Jon Doe</a> on <a href="#" class="widget-comm-title">Sed do eiusmod</a></span>
        </div>

        <div class="widget-item">
            <span><a href="#">Jon Doe</a> on <a href="#" class="widget-comm-title">Lorem ipsum dolor sit amet</a></span>
        </div>

        <div class="widget-item">
            <span><a href="#">Jon Doe</a> on <a href="#" class="widget-comm-title">Sed do eiusmod</a></span>
        </div>-->

    </div><!-- / .comments-widget -->


    <!-- Text - Widget -->
    <div class="col-md-12 text-widget">
        <h5 class="header-widget">Text Widget</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae qui error, incidunt quia pariatur facere quasi totam inventore amet rerum.</p>
    </div><!-- / .text-widget -->

<?php echo dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- / .sidebar -->


