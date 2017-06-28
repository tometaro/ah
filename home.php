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
					<h2 class="siteSection-title"><?php echo $category->cat_name; ?></h2>
					<ul class="articleList">
						<?php query_posts('showposts=5&cat='.$category->cat_ID);
						if (have_posts()) : while (have_posts()) : the_post(); ?>

							<?php get_template_part( 'template-parts/articleList' ); ?>

						<?php endwhile; endif; ?>
					</ul>
				</div>
			<?php endforeach; ?>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php
// get_sidebar();
get_footer();
