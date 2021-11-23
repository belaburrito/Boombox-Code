<?php
function boombox_register_styles(){

    $version = wp_get_theme()->get( 'Version' );
    wp_enqueue_style('boombox-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '4.4.1', 'all');
    wp_enqueue_style('boombox-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css", array(), 'all');
    wp_enqueue_style('boombox-bsicons', "https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css", array(), 'all');
    wp_enqueue_style('boombox-slick', "https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css", array(), 'all');
    wp_enqueue_style('boombox-slicktheme', "https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css", array(), 'all');
    wp_enqueue_style('boombox-style', get_template_directory_uri() . '/style.css', array(), $version, 'all');
    

    wp_enqueue_script('boombox-jquery', "https://code.jquery.com/jquery-3.4.1.min.js", true);
    wp_enqueue_script('boombox-bundle-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js", true);
    wp_enqueue_script('boombox-slick-script', "https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js", true);
    wp_enqueue_script('boombox-validate-script', "https://cdn.rawgit.com/PascaleBeier/bootstrap-validate/v2.2.0/dist/bootstrap-validate.js", true);
    wp_enqueue_script('script', get_template_directory_uri() . '/js/boombox-main.js', null, true);  
}

add_action( 'wp_enqueue_scripts', 'boombox_register_styles');
?>