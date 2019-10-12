<?php $count = 3; ?>
<?php if (have_posts()) : ?>
  <div class="row">
    <?php while (have_posts()): the_post(); ?>
      <?php get_template_part('partials/content','loop'); ?>
      <?php $count++; ?>

      <?php if($count % 3 == 0): ?>
        </div><div class="row">
      <?php endif; ?>
    <?php endwhile;?>
  </div><!-- end dynamic row -->

<?php else: ?>
  <div class="row">
    <div class="col-md-12">
    Sorry, no results found.
    </div>
  </div>
<?php endif; ?>
