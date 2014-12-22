<?php

// Load parent theme

function players_load_scripts() {
    wp_enqueue_style(
        'players_child_css',
        get_stylesheet_directory_uri() . '/style.css',
        false,
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
        echo "background-image: url('{$url[0]}');x-message: /thumbnail found for $id/;";
    } else {
        echo "x-message: /no post thumbnail for $id/;";
    }
}

add_action('wp_enqueue_scripts', 'players_load_scripts', 50);
add_theme_support( 'post-thumbnails' );

