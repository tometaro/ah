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
<div class="siteSection-inner">
	<div class="siteSection-Title">カテゴリ</div>


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="thumbnail_lists">
				<ul class="articleList">
					<?php $posts = get_posts('numberposts=5'); ?>
						<?php foreach($posts as $post): ?>
							<li>
								<a href="<?php the_permalink(); ?>" class="articleList-image entry-image"><?php the_post_thumbnail( 'thumb320', array('style' => 'width:320px;height:180px;') ); ?></a>
								<a href="<?php the_permalink(); ?>" class="entry-image"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/no-image-320.png" alt="NO IMAGE" title="NO IMAGE" style="width:320px;height:180px;" class="no-image list-no-image" /></a>

								<div class="post_right">
									<strong class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></strong>
									<p class="time"><?php the_time('Y年m月d日（D）'); ?></p>
									<p class="summary">【記事の要約文章】</p>
								</div>
							</li>
						<?php endforeach; ?>
					</ul>
			</div>

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>

			<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div>
<?php
// get_sidebar();
get_footer();
