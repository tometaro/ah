<li>
  <a href="<?php the_permalink(); ?>">
    <div class="article-wrap">
      <div class="articleList-image"><?php the_post_thumbnail( 'large' ); ?></div>
      <div class="articleList-noImage"></div>
    </div>
    <div class="articleList-title"><?php the_title(); ?></div>
    <p class="articleList-time"><?php echo get_post_time('M d, Y'); ?></p>
  </a>
</li>
