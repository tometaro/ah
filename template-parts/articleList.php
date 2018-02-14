<li>
  <a href="<?php the_permalink(); ?>">
    <div class="article-wrap">
      <div class="articleList-image" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>)"></div>
      <div class="articleList-noImage"></div>
    </div>
    <div class="articleList-title"><?php the_title(); ?></div>
    <p class="articleList-time"><?php echo get_post_time('M d, Y'); ?></p>
  </a>
</li>
