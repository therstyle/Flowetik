<?php
/*
YARPP Template: Flowetik
Description: Requires a theme which supports post thumbnails
Author: mitcho (Michael Yoshitaka Erlewine)
*/ ?>
<h3>related posts you may like</h3>
<?php if (have_posts()):?>
<div class="row">
	<?php while (have_posts()) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class('lg-bottom-space col-sm-6 col-xs-12'); ?>>
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
		</article><!-- #post-## -->
	<?php endwhile; ?>
</div>

<?php else: ?>
<p>No related photos.</p>
<?php endif; ?>
