<?php


    /*post_author_meta_box()-thumbnails*/
    add_theme_support('post-thumbnails');

    /*CSS*/
    wp_enqueue_style( 'slider', get_template_directory_uri() . '/css/animate.css');
    wp_enqueue_style( 'bootcss', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style( 'magcss', get_template_directory_uri() . '/css/magnific-popup.css');
    wp_enqueue_style( 'slickcss', get_template_directory_uri() . '/css/slick.css');


    wp_enqueue_style( 'stylemain', get_template_directory_uri() . '/css/style.css');
    wp_enqueue_style( 'lineacss', get_template_directory_uri() . '/css/linea-font.css');
    wp_enqueue_style( 'fontawesomecss', get_template_directory_uri() . '/css/font-awesome.min.css');
    wp_enqueue_style( 'maincss', get_template_directory_uri() . '/css/main.css');
    wp_enqueue_style( 'respcss', get_template_directory_uri() . '/css/responsive.css');





    /*JS*/

    wp_enqueue_script( 'modenizrjs', get_template_directory_uri() . '/js/modernizr-2.8.3.min.js', null, 1.1, false);

    wp_enqueue_script( 'jquery214js', get_template_directory_uri() . '/js/jquery-2.1.4.min.js', null, 1.1, false);
    wp_enqueue_script( 'googlefontjs', get_template_directory_uri() . '/js/google-fonts.js', null, 1.1, false);
    wp_enqueue_script( 'easingjs', get_template_directory_uri() . '/js/jquery.easing.js', null, 1.3, false);
    wp_enqueue_script( 'waypointsjs', get_template_directory_uri() . '/js/jquery.waypoints.min.js', null, 1.1, false);
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', null, 1.1, false);
    wp_enqueue_script( 'bootstrapjs', get_template_directory_uri() . '/js/bootstrap-hover-dropdown.min.js', null, 1.1, false);
    wp_enqueue_script( 'scroothscrooljs', get_template_directory_uri() . '/js/smoothscroll.js', null, 1.2, false);
    wp_enqueue_script( 'locscrolljs', get_template_directory_uri() . '/js/jquery.localScroll.min.js', null, 1.1, false);
    wp_enqueue_script( 'scrolltojs', get_template_directory_uri() . '/js/jquery.scrollTo.min.js', null, 1.1, false);
    wp_enqueue_script( 'stellerjs', get_template_directory_uri() . '/js/jquery.stellar.min.js', null, 1.1, false);
    wp_enqueue_script( 'parallaxjs', get_template_directory_uri() . '/js/jquery.parallax.js', null, 1.1, false);
    wp_enqueue_script( 'slickjs', get_template_directory_uri() . '/js/slick.min.js', null, 1.1, false);
    wp_enqueue_script( 'piechartjs', get_template_directory_uri() . '/js/jquery.easypiechart.min.js', null, 1.1, false);
    wp_enqueue_script( 'countup', get_template_directory_uri() . '/js/countup.min.js', null, 1.1, false);
    wp_enqueue_script( 'isotopejs', get_template_directory_uri() . '/js/isotope.min.js', null, 1.1, false);
    wp_enqueue_script( 'magpopupjs', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', null, 1.1, false);
    wp_enqueue_script( 'wowjs', get_template_directory_uri() . '/js/wow.min.js', null, 1.1, false);
    wp_enqueue_script( 'mainjs', get_template_directory_uri() . '/js/main.js', null, 1.1, false);



    add_theme_support('html5', array('comment-list','comment-form'));


?>
