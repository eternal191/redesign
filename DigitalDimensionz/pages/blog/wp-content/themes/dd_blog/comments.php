
<?php
wp_list_comments(apply_filters('list_comments_args', array(
    'style' => 'ul',
    'short_ping' => true,
    'format' => 'html5',
    'avatar_size' => '60',
    'callback' => 'my_comments_callback',
)))
?>







<?php
    function my_comments_callback($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment;
?>

<!-- Comment 1 -->
<div <?php comment_class("bp-comment") ?> id="<?php comment_ID()?>">
    <div class="comment-avatar"><i class="fa fa-user"></i></div>

    <div class="comment-info">
        <h6 class="comment-name"><?php printf(__('<cite class="fn">%s</cite> <span class="says">says:</span>'), get_comment_author_link()) ?></h6>
        <span class="comment-time">on  <?php printf(__('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></span>
        <!--<a class="comment-replay-btn"><i class="fa fa-mail-reply-all"></i> Reply</a>-->
	    <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
    </div>
	<?php /*comment_reply_link(array_merge( $args, array('depth' => $depth, 'before' => '<i class="fa fa-mail-reply-all">', 'after' => '</i>', 'max_depth' => $args['max_depth']))) */?>
	<?php comment_text() ?>
</div><!-- / .bp-comment -->
    <?php
    }
    ?>








