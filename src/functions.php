<?php

$DEBUG = true;

// Load parent theme

function players_load_scripts() {
    // We are using SASS, so the styles from Cornerstone are built into wp-players-theme/styles.css
    wp_deregister_style('normalize');
    wp_deregister_style('foundation_css');

    wp_enqueue_style(
        'players_style_css',
        get_stylesheet_directory_uri() . '/style.' . ($DEBUG)?'':'min.' . 'css',
        false,
        'all'
    );
    wp_enqueue_script(
        'players_app_css',
        get_stylesheet_directory_uri() . '/js/core.' . ($DEBUG)?'':'min.' . 'js',
        array('jquery'),
        'all'
    );
}

function players_head() {
    // print css for background images
}

function the_players_cover_image( $id ) {
/*    global $players_cover_images;
    if( $players_cover_images && array_key_exists( $players_cover_images, get_the_id() ) ) {
        echo "background-image: url('" . $players_cover_images[get_the_id()] . "');";
    }*/
    if( has_post_thumbnail( $id ) ) {
        $url = wp_get_attachment_image_src( get_post_thumbnail_id( $id ), 'full' );
        $debugmsg = ($DEBUG)?"x-message: /thumbnail found for $id/;":'';
        echo "background-image: url('{$url[0]}');$debugmsg";
    } else {
        if($DEBUG) echo "x-message: /no post thumbnail for $id/;";
    }
}

add_action('wp_enqueue_scripts', 'players_load_scripts', 50);
add_theme_support( 'post-thumbnails' );

