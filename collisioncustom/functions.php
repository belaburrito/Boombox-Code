<?php
function collision_register_styles(){

    $version = wp_get_theme()->get( 'Version' );
    wp_enqueue_style('collision-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '4.4.1', 'all');
    wp_enqueue_style('collision-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css", array(), 'all');
    wp_enqueue_style('collision-bsicons', "https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css", array(), 'all');
    wp_enqueue_style('collision-style', get_template_directory_uri() . '/style.css', array(), $version, 'all');  

}

add_action( 'wp_enqueue_scripts', 'collision_register_styles');

function collision_register_scripts(){
    wp_enqueue_script('collision-jquery', "https://code.jquery.com/jquery-3.4.1.min.js", true);
    wp_enqueue_script('collision-bundle-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js", true);
    wp_enqueue_script('collision-validate-script', "https://cdn.rawgit.com/PascaleBeier/bootstrap-validate/v2.2.0/dist/bootstrap-validate.js", true);

}
add_action( 'wp_enqueue_scripts', 'collision_register_scripts');
?>