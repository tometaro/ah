<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ah
 */

get_header(); ?>

	<div id="primary" class="content-area">
 		<main id="main" class="site-main" role="main">

			<div class="siteSection-inner">
				<div class="siteSection-innerWrap">
		 			<ul class="articleList">

					<?php if(have_posts()): while(have_posts()):the_post(); ?>

						<?php get_template_part( 'template-parts/articleList' ); ?>

					<?php endwhile; endif; ?>

					</ul>

					<!--ページネーション-->
					 <?php if (function_exists('responsive_pagination')) {
					  responsive_pagination($wp_query->max_num_pages);
					} ?>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
