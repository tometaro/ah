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
						if (have_posts()) : while (have_posts()) : the_post();
						?>
							<li>
								<a href="<?php the_permalink(); ?>" class="articleList-image entry-image"><?php the_post_thumbnail( 'thumb320', array('style' => 'width:320px;height:180px;') ); ?></a>
								<a href="<?php the_permalink(); ?>" class="entry-image"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/noImage.svg" alt="NO IMAGE" title="NO IMAGE" style="width:320px;height:180px;" class="no-image list-no-image" /></a>

								<div class="post_right">
									<strong class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></strong>
									<p class="time"><?php the_time('Y年m月d日（D）'); ?></p>
									<p class="summary">【記事の要約文章】</p>
								</div>
							</li>
						<?php endwhile; endif; ?>
					</ul>
				</div>
			<?php endforeach; ?>
		</main><!-- #main -->
	</div><!-- #primary -->
</div>
<?php
// get_sidebar();
get_footer();
