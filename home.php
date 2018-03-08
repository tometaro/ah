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

			<?php $categories = get_categories(); foreach($categories as $category) :?>
				<div class="siteSection-inner">
					<div class="siteSection-innerWrap">
						<div class="siteSection-titleWrap">
							<h2 class="siteSection-title"><?php echo $category->cat_name; ?></h2>
							<p class="siteSection-read"><?php echo category_description(); ?></p>
						</div>
						<ul class="articleList">
							<?php query_posts('showposts=6&cat='.$category->cat_ID);
							if (have_posts()) : while (have_posts()) : the_post(); ?>

								<?php get_template_part( 'template-parts/articleList' ); ?>

							<?php endwhile; endif; ?>
						</ul>
						<div class="button-wrapper">
							<a class="button" href="<?php echo get_category_link($category->cat_ID);?>">MORE</a>
						</div>
					</div>
				</div>
			<?php endforeach; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
