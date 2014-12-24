<?php

// Load parent theme

function players_load_scripts() {
    // We are using SASS, so the styles from Cornerstone are built into wp-players-theme/styles.css
    wp_deregister_style('normalize');
    wp_deregister_style('foundation_css');

    wp_enqueue_style(
        'players_style_css',
        get_stylesheet_directory_uri() . '/style.css'
    );
    wp_enqueue_style(
        'foundation_icons_3_css',
        'https://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css'
    );
    wp_enqueue_style(
        'font_league_gothic',
        get_stylesheet_directory_uri() . '/css/league-gothic/stylesheet.css'
    );
    wp_enqueue_script(
        'players_core_js',
        get_stylesheet_directory_uri() . '/js/core.js',
        array('jquery','foundation_modernizr_js'),
        false,
        true
    );
}

// Override initialization code from cornerstone.  Our init code
// is located in js/core.js
function cornerstone_foundation_init() { }

function the_players_cover_image( $id, $scrim=false ) {
    if($scrim === true){
        $scrim = "linear-gradient( to bottom, rgba(0,0,0,0) 0%, rgba(0,0,0,0.3) 100% )";
    }
    if( has_post_thumbnail( $id ) ) {
        $url = wp_get_attachment_image_src( get_post_thumbnail_id( $id ), 'full' );
        $debugmsg = ($DEBUG)?"x-message: /thumbnail found for $id/;":'';
        $scrimbg = ($scrim)?"$scrim,":'';
        echo "background-image: $scrimbg url('{$url[0]}');$debugmsg";
    } else {
        if($DEBUG) echo "x-message: /no post thumbnail for $id/;";
    }
}

add_action('wp_enqueue_scripts', 'players_load_scripts', 50);
add_theme_support( 'post-thumbnails' );

