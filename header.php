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

<?php wp_deregister_script('jquery'); ?>
<!-- WordPressのjQueryを読み込ませない -->

<script type="text/javascript" src="<?php bloginfo(template_url);?>/js/common.js"></script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'ah' ); ?></a>

    <header class="Header">
        <div class="Header-Inner">
            <div class="Logo">
              <a class="Header-Title" href="index.html">
                <p class="Logo-Icon"><img src="icon-setting.svg" alt="CONPORNENT" height="30"></p>
                <h1 class="Logo-Title">CONPORNENT</h1>
              </a>
            </div>
            <div class="Navi-Toggle">
                <div>
                <span class="Header-SpMenu"></span>
                <span class="Header-SpMenu"></span>
                <span class="Header-SpMenu"></span>
                </div>
            </div>
            <nav class="Navi">
                <div class="Navi-Inner">
                    <ul>
                        <li><a href="" class="Header-Text">TEXT</a></li>
                        <li><a href="" class="Header-Text">TEXT</a></li>
                        <li><a href="" class="Header-Text">TEXT</a></li>
                        <li><a href="" class="Header-Text">TEXT</a></li>
                        <li><a href="" class="Header-Text">TEXT</a></li>
                    </ul>
                </div>
                <div class="Navi-Shadow"></div>
            </nav>
        </div>
    </header>

	<header id="masthead" class="siteHeader" role="banner">
		<div class="siteHeader-Inner">
			<div class="siteHeader-branding">
				<?php
				if ( is_front_page() && is_home() ) : ?>
					<h1 class="siteHeader-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php else : ?>
					<p class="siteHeader-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
				endif;

				$description = get_bloginfo( 'description', 'display' );
				if ( $description || is_customize_preview() ) : ?>
					<p class="site-description"></p>
				<?php
				endif; ?>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation" role="navigation">
			    <div class="Navi-Toggle">
            <div>
			        <span class="Header-SpMenu"></span>
			        <span class="Header-SpMenu"></span>
			        <span class="Header-SpMenu"></span>
            </div>
          </div>
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'ah' ); ?></button>
				<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
			</nav><!-- #site-navigation -->
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
