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
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="siteHeader-branding site-branding">
          <img class="siteHeader-logo" src="<?php bloginfo('template_directory'); ?>/images/siteLogo.svg">
          <div class="siteHeader-title">Art</div>
        </a>
        <nav class="siteNavi" role="navigation">
          <?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
          <div class="siteNavi-shadow"></div>
        </nav><!-- #site-navigation -->

        <div class="naviToggle">
          <div class="naviToggle-inner">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>

        <nav class="spNavi naviToggle-block" role="navigation">
          <div class="spNavi-inner">
            <?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
          </div>
        </nav><!-- #site-navigation -->
        <div class="naviToggle-block-shadow"></div>
      </header><!-- #masthead -->

      <?php if(is_front_page()): ?><!-- フロントページのみで表示-->

      <section class="hero">
        <div class="hero-white">
          <div class="hero-wrap">
            <h1 class="hero-title"><?php bloginfo( 'name' ); ?></h1>
            <p class="hero-text"><?php bloginfo('description'); ?></p>
          </div>
        </div>
      </section>

      <?php else: ?>

      <section class="keyVisual">
        <div class="keyVisual-vs" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>); ">
          <div class="keyVisual-white">
            <div class="keyVisual-gray keyVisual-gray-singlePage">
              <div class="keyVisual-wrapper">
                <?php if(is_category()): ?>
                  <h1 class="siteSection-title"><?php single_cat_title(); ?>記事一覧</h1>
                <?php endif; ?>
                <?php if(is_page()): ?>
                  <h1 class="siteSection-title"><?php the_title(); ?></h1>
                <?php endif; ?>
                <?php if(is_single()): ?>
                  <div class="article-titleBlock">
                  <h1 class="article-title"><?php the_title(); ?></h1>
                  <div class="entry-meta"><?php echo get_post_time('M d, Y'); ?></div>
                  </div>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
      </section>

      <?php endif; ?>

      <div id="content" class="siteSection site-content">
