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
		<section class="keyVisual">
				<div class="keyVisual-vs" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>); ">

			<div class="keyVisual-white">
				<div class="keyVisual-gray">

				<div class="keyVisual-wrapper">
					<div class="article-titleBlock entry-header">
						<?php
						if ( is_single() ) :
							the_title( '<h1 class="article-title entry-title">', '</h1>' );
						else :
							the_title( '<h2 class="article-title　entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
						endif;

						if ( 'post' === get_post_type() ) : ?>
						<div class="entry-meta">
							<?php ah_posted_on(); ?>
						</div><!-- .entry-meta -->
						<?php
						endif; ?>
					</div><!-- .entry-header -->
					<!-- <img src="<?php the_post_thumbnail('full'); ?>" alt="" /> -->
				</div>
				</div>
			</div>
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
