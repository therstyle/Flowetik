
<section id="quick-contact">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="row">
          <div class="col-md-4 grid-space">
            <?php dynamic_sidebar('contact'); ?>
            <?php if (have_rows('social', 'option')): ?>
  						<div class="lg-top-space">
  							<?php while(have_rows('social', 'option')): the_row(); ?>
  								<?php get_template_part('content-social'); ?>
  							<?php endwhile; ?>
  						</div>
  					<?php endif; ?>
          </div>

          <div class="col-md-7 col-md-offset-1">
            <?php echo do_shortcode('[formidable id=5]'); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
