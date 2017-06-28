<li>
  <?php if(has_post_thumbnail()): ?><!-- アイキャッチがある場合 -->
    <a href="<?php the_permalink(); ?>" class="articleList-image entry-image"><?php the_post_thumbnail( 'thumb300', array('style' => 'width:300px;height:180px;') ); ?></a>
  <?php else: ?><!-- アイキャッチがない場合 -->
    <a href="<?php the_permalink(); ?>" class="articleList-image"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/noImage.svg" alt="NO IMAGE" title="NO IMAGE" style="width:300px;height:180px;" class="no-image list-no-image" /></a>
  <?php endif; ?>
  <div class="articleList-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
  <p class="articleList-time"><?php the_time('Y年m月d日（D）'); ?></p>
</li>
