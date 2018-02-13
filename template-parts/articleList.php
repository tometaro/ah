<li>
  <a href="<?php the_permalink(); ?>">
    <div class="articleList-image" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>)"></div>
    <div class="articleList-title"><?php the_title(); ?></div>
    <p class="articleList-time"><?php the_time('Y年m月d日（D）'); ?></p>
  </a>
</li>
