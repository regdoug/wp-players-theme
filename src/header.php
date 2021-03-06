<!DOCTYPE html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
<meta charset="utf-8" />

<meta name="viewport" content="width=device-width,initial-scale=1.0" />

<title><?php wp_title( '|', true, 'right' ); ?></title>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<nav class="top-bar" data-topbar role="navigation" data-options="mobile_show_parent_link: true">
  <ul class="title-area">
    <li class="name"><h1>
        <a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
            <img height="51px" src="<?php echo get_stylesheet_directory_uri()?>/img/logo150.png">
        </a>
        <a title="RIT Home" href="https://www.rit.edu/"><span class="ritabbr"><span class="ritlong show-for-large-up"></span></span></a>
    </h1></li>
    <li class="toggle-topbar"><a href="#"><span>Menu</span></a></li>
  </ul>

         <section class="top-bar-section">
            <ul class="right">
                <li class="show-for-medium-up ritsearch">
                    <form method="get" action="http://www.rit.edu/search/">
                    <div class="row collapse">
                        <div class="large-10 small-9 columns">
                            <input type="text" name="q" placeholder="Search RIT">
                        </div>
                        <div class="large-2 small-3 columns">
                            <button class="search-button expand" title="Search RIT">&nbsp;<i class="fi-magnifying-glass"></i></button>
                        </div>
                    </div>
                    </form>
                </li>
                <li>
                    <a class="right-off-canvas-toggle menu-icon"><span></span></a>
                </li>
            </ul>
        </section>
    </nav>

    <div class="scrollblock">
        <div id="logo">
        <a href="#">
            <div class="wrap-inner">
            <img height="96px" src="<?php echo get_stylesheet_directory_uri()?>/img/logo150.png">
            <h2><?php bloginfo('title'); ?></h2>
            </div>
        </a>
        <h3><?php bloginfo('description'); ?></h3>
        </div>
    </div>

<div class="off-canvas-wrap" data-offcanvas>
  <div class="inner-wrap">
    <aside class="right-off-canvas-menu">
        <ul class="off-canvas-list">
            <li><label>RIT</label></li>
            <li><a href="https://www.rit.edu/">RIT Home</a></li>
            <li><a href="https://www.rit.edu/directories.html">RIT Directories</a></li>
            <li class="hide-for-medium-up">
                <form method="get" action="http://www.rit.edu/search/" class="ritsearch">
                <div class="row collapse">
                    <div class="large-10 small-9 columns">
                        <input type="text" name="q" placeholder="Search RIT">
                    </div>
                    <div class="large-2 small-3 columns">
                        <button class="search-button expand" title="Search RIT">&nbsp;<i class="fi-magnifying-glass"></i></button>
                    </div>
                </div>
                </form>
            </li>
            <li><label><?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?></label></li>
        </ul>
        <?php
          if ( has_nav_menu( 'header-menu-left' ) ) {
              wp_nav_menu( array(
                  'theme_location' => 'header-menu-left',
                  'container' => false,
                  'depth' => 0,
                  'items_wrap' => '<ul class="off-canvas-list">%3$s</ul>',
                  'fallback_cb' => false,
                  'walker' => new cornerstone_walker( array(
                      'in_top_bar' => false,
                      'item_type' => 'li'
                  ) ),
              ) );
            }
        ?>
        <?php
          if ( has_nav_menu( 'header-menu-right' ) ) {
              wp_nav_menu( array(
                  'theme_location' => 'header-menu-right',
                  'container' => false,
                  'depth' => 0,
                  'items_wrap' => '<ul class="off-canvas-list">%3$s</ul>',
                  'fallback_cb' => false,
                  'walker' => new cornerstone_walker( array(
                      'in_top_bar' => false,
                      'item_type' => 'li'
                  ) ),
              ) );
            }
        ?>
    </aside>

