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
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/sass/foundation/icon-font/dist/css/symbols.css" >

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div id="page" class="site">
      <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'ah' ); ?></a>

      <header id="masthead" class="siteHeader site-header" role="banner">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="siteHeader-branding site-branding">
          <img class="siteHeader-logo-mark" src="<?php bloginfo('template_directory'); ?>/images/logo-mark.svg">
          <img class="siteHeader-logo-type" src="<?php bloginfo('template_directory'); ?>/images/logo-type.svg">
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
            <h1 class="hero-title"><svg version="1.1" id="レイヤー_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
            	 y="0px" viewBox="0 0 93.08 24.002" style="enable-background:new 0 0 93.08 24.002;" xml:space="preserve">
            <g>
            	<path class="st0" d="M10.343,2.939l-6.552,18h3.193l1.457-4.002h7.277l1.457,4.002h3.193l-6.551-18H10.343z M9.533,13.938
            		l2.547-6.997l2.547,6.997H9.533z"/>
            	<polygon class="st0" points="56.018,10.438 48.018,10.438 48.018,2.938 45.018,2.938 45.018,10.438 45.018,13.438 45.018,20.938
            		48.018,20.938 48.018,13.438 56.018,13.438 56.018,20.938 59.018,20.938 59.018,13.438 59.018,10.438 59.018,2.938 56.018,2.938
            		"/>
            	<path class="st0" d="M38.08,2.939h-3v4h-3v3h3v8c0,1.657,1.343,3,3,3h3v-3h-2c-0.552,0-1-0.448-1-1v-7h3v-3h-3V2.939z"/>
            	<path class="st0" d="M26.08,8.32V6.939h-3v14h3v-8c0-1.657,1.343-3,3-3h1v-3h-1C27.877,6.939,26.81,7.478,26.08,8.32z"/>
            	<path class="st0" d="M84.08,6.939c-1.094,0-2.117,0.298-3,0.809V2.939h-3v10v1v1v6h3V20.13c0.883,0.512,1.906,0.809,3,0.809
            		c3.314,0,6-2.686,6-6v-1v-1C90.08,9.626,87.394,6.939,84.08,6.939z M87.08,14.939c0,1.657-1.343,3-3,3s-3-1.343-3-3v-2
            		c0-1.657,1.343-3,3-3s3,1.343,3,3V14.939z"/>
            	<path class="st0" d="M71.08,15.939c0,1.105-0.896,2-2,2h-1c-1.104,0-2-0.895-2-2v-9h-3v9c0,2.761,2.239,5,5,5h1
            		c0.712,0,1.387-0.154,2-0.422v0.422h3v-14h-3V15.939z"/>
            </g>
            </svg></h1>
            <p class="hero-text st0"><?php bloginfo('description'); ?></p>
          </div>
        </div>
        <div class="hero-logoVisul"></div>
      </section>

      <?php else: ?>

      <section class="keyVisual">
        <div class="keyVisual-vs">
          <div class="keyVisual-white">
            <div class="keyVisual-gray">
              <?php if(is_category()): ?>
              <div class="keyVisual-wrapper keyVisual-gray-catePage">
                <h1 class="siteSection-title"><?php single_cat_title(); ?>記事一覧</h1>
              </div>
              <?php endif; ?>
              <?php if(is_page()): ?>
              <div class="keyVisual-wrapper keyVisual-gray-catePage">
                <h1 class="siteSection-title"><?php the_title(); ?></h1>
              </div>
              <?php endif; ?>
              <?php if(is_single()): ?>
              <div class="keyVisual-wrapper">
                <div class="article-titleBlock">
                  <h1 class="article-title"><?php the_title(); ?></h1>
                <div class="entry-meta"><?php echo get_post_time('M d, Y'); ?></div>
                </div>
              </div>
              <?php endif; ?>
              </div>
            </div>
          <div><?php the_post_thumbnail( 'full' ); ?><div>
        </div>
      </section>

      <?php endif; ?>

      <div id="content" class="siteSection site-content">
