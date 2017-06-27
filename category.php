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

<!--  -->
	<div id="primary" class="content-area">
 		<main id="main" class="site-main" role="main">
 			<h1 class="siteSection-title"><?php single_cat_title(); ?>記事一覧</h1>
 			<ul class="articleList">
 			<?php query_posts('posts_per_page=2'); ?>
			<?php if(have_posts()): while(have_posts()):the_post(); ?>
  			<li>
					<?php if(has_post_thumbnail()): ?><!-- アイキャッチがある場合 -->
						<a href="<?php the_permalink(); ?>" class="articleList-image entry-image"><?php the_post_thumbnail( 'thumb300', array('style' => 'width:300px;height:180px;') ); ?></a>
					<?php else: ?><!-- アイキャッチがない場合 -->
						<a href="<?php the_permalink(); ?>" class="entry-image"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/noImage.svg" alt="NO IMAGE" title="NO IMAGE" style="width:300px;height:180px;" class="no-image list-no-image" /></a>
					<?php endif; ?>
					<div class="post_right"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
					<p class="time"><?php the_time('Y年m月d日（D）'); ?></p>
				</li>
			<?php endwhile; endif; ?>
			<?php previous_posts_link('新しい投稿ページへ'); ?>
			<?php next_posts_link('古い投稿ページへ'); ?>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php
// get_sidebar();
get_footer();
