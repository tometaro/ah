<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ah
 */

get_header(); ?>

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
								<?php the_time('Y年m月d日（D）'); ?>
							</div><!-- .entry-meta -->
							<?php
							endif; ?>
						</div><!-- .entry-header -->
					</div>
				</div>
			</div>
		</div>
	</section>

	<div id="primary" class="siteSection-wrapper siteSection-wrapper-narrow content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
