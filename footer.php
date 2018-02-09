<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ah
 */

?>

	</div><!-- #content -->

	<?php if ( !is_home() && !is_front_page() ) : ?>
		<div class="breadcrumbs" vocab="http://schema.org/" typeof="BreadcrumbList">
			<div class="breadcrumbs-inner">
				<?php if(function_exists('bcn_display'))
				{
				bcn_display();
				}?>
			</div>
		</div>
	<?php endif; ?>

	<footer id="colophon" class="siteFooter site-footer" role="contentinfo">
		<div class="site-info">
      Copyright © <a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?> </a>All Rights Reserved.
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
