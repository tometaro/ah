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
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/sass/icon-font/dist/css/symbols.css" >

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'ah' ); ?></a>

    <header id="masthead" class="siteHeader site-header" role="banner">
        <div class="siteHeader-inner">
            <div class="siteHeader-branding site-branding">
            <?php
            if ( is_front_page() && is_home() ) : ?>
                <h1 class="siteHeader-title site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <?php else : ?>
                <p class="siteHeader-title site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
            <?php
            endif;

            $description = get_bloginfo( 'description', 'display' );
            if ( $description || is_customize_preview() ) : ?>
                <p class="siteHeader-text site-description"><img src="<?php bloginfo('template_directory'); ?>/images/siteLogo.svg"></p>
            <?php
            endif; ?>
            </div><!-- .site-branding -->

            <div class="naviToggle">
                <div class="naviToggle-inner">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>

            <nav class="siteNavi siteHeader-navi naviToggle-block " role="navigation">
                <div class="siteNavi-inner">
                    <?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
                </div>
                <div class="siteNavi-shadow"></div>

            </nav><!-- #site-navigation -->
        </div>

    </header><!-- #masthead -->

    <?php if ( !is_home() && !is_front_page() ) : ?>
    <div class="breadcrumbs" vocab="http://schema.org/" typeof="BreadcrumbList">
      <div class="breadcrumbs-inner">
        <?php if(function_exists('bcn_display'))
        {
        bcn_display();
        }?>
      </div>
    </div>
    <?php endif; ?>

    <?php if(is_front_page()): ?><!-- フロントページのみで表示-->
        <section class="hero">
            <div class="hero-title"><?php bloginfo('description'); ?></div>
            <img src="<?php header_image(); ?>" alt="" />
        </section>
    <?php endif; ?>

    <div id="content" class="siteSection site-content">
