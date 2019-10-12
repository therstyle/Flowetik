<article id="post-<?php the_ID(); ?>" <?php post_class('lg-bottom-space col-md-4'); ?>>
  <?php if (has_post_thumbnail()): ?>
    <div class="bottom-space">
      <a href="<?php the_permalink(); ?>">
      <?php the_post_thumbnail('article-thumb', array('class' => 'img-center')); ?>
      </a>
    </div>
  <?php endif; ?>

  <div class="row bottom-space">
    <div class="col-xs-3">
      <div class="date-icon">
        <span class="month"><?php the_time('M'); ?></span>
        <span class="day"><?php the_time('j'); ?></span>
      </div>
    </div>
    <div class="col-xs-9">
      <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    </div>
  </div>

  <?php custom_excerpt('short_excerpt'); ?>
</article><!-- #post-## -->
