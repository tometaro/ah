<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ah
 */

get_header(); ?>
	<?php if(is_single()): ?><!-- 記事ページのみで表示-->
			<section class="hero hero-image hero-image-small">
				<div class="hero-single">
					<div class="hero-title"></div>
					<img src="<?php the_post_thumbnail('full'); ?>" alt="" />
				</div>
			</section>
	<?php endif; ?>
	<div id="primary" class="siteSection-wrapper content-area">
		<main id="main" class="siteSection-content site-main" role="main">
			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', get_post_format() );

				// the_post_navigation();

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
		<?php get_sidebar();?>
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
