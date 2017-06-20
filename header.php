<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ah
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'ah' ); ?></a>

    <header id="masthead" class="Header site-header" role="banner">
        <div class="Header-Inner">
            <div class="Header-Branding site-branding">
                <?php
                if ( is_front_page() && is_home() ) : ?>
                    <h1 class="Header-title site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                <?php else : ?>
                    <p class="Header-title site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                <?php
                endif;

                $description = get_bloginfo( 'description', 'display' );
                if ( $description || is_customize_preview() ) : ?>
                    <p class="Header-text site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
                <?php
                endif; ?>
            </div><!-- .site-branding -->

            <div class="Navi-Toggle">
                <span class="Header-SpMenu"></span>
                <span class="Header-SpMenu"></span>
                <span class="Header-SpMenu"></span>
            </div>

            <nav class="Navi" role="navigation">
                <div class="Navi-Inner">
                    <?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
                </div>
                <div class="Navi-Shadow"></div>

            </nav><!-- #site-navigation -->
        </div>

    </header><!-- #masthead -->

    <section class="Hero Hero-Image">
        <div class="Hero-Title">
            <h1>テキスト</h1>
            <p>CONPORNENT</p>
        </div>
        <img src="<?php header_image(); ?>" alt="" />
    </section>

    <div id="content" class="siteContent site-content">
