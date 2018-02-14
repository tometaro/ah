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
<?php if(is_category()): ?><!-- 記事ページのみで表示-->
	<section class="keyVisual">
		<div class="keyVisual-vs" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>); ">
			<div class="keyVisual-white">
				<div class="keyVisual-gray">
					<div class="keyVisual-wrapper">
	 					<h1 class="siteSection-title"><?php single_cat_title(); ?>記事一覧</h1>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php endif; ?>

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
					<div class="pagination-box right">
					 <?php if (function_exists('responsive_pagination')) {
					  responsive_pagination($wp_query->max_num_pages);
					} ?>
					</div>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php
// get_sidebar();
get_footer();
