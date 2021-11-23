<?php
function relativity_register_styles(){

    $version = wp_get_theme()->get( 'Version' );
    wp_enqueue_style('r-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css", array(), '4.6.0', 'all');
    wp_enqueue_style('r-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css", array(), 'all');
    wp_enqueue_style('r-style', get_template_directory_uri() . '/style.css', array(), $version, 'all');
    wp_enqueue_style('r-font', "https://fonts.googleapis.com/css2?family=Roboto&display=swap", array(), 'all');

    

}

add_action( 'wp_enqueue_scripts', 'relativity_register_styles');

function relativity_register_scripts(){
    wp_enqueue_script('r-jquery', "https://code.jquery.com/jquery-3.4.1.min.js", true);
    wp_enqueue_script('r-min', "https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js", true);
    wp_enqueue_script('r-bundle', "https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js", true);
    wp_enqueue_script('r-validate-script', "https://cdn.rawgit.com/PascaleBeier/bootstrap-validate/v2.2.0/dist/bootstrap-validate.js", true);

}
add_action( 'wp_enqueue_scripts', 'relativity_register_scripts');
?>