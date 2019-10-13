<?php

$args = [
  'post_type' => 'testimonial',
  'nopaging' => true
];

$testimonial_query = new WP_Query($args);
$count = 0;
?>

<?php if ($testimonial_query->have_posts()): ?>
  <div class="carousel-inner" role="listbox">
    <?php while ($testimonial_query->have_posts()): $testimonial_query->the_post(); ?>
      <?php if ($count == 0): ?>
        <div class="item active">
          <div class="row">
            <div class="col-sm-2">
              <?php echo file_get_contents(get_template_directory().'/assets/images/icons/quotes.svg'); ?>
            </div>

            <div class="col-sm-10">
              <?php the_content(); ?>
            </div>
          </div>
        </div>
      <?php else: ?>
        <div class="item">
          <div class="row">
            <div class="col-sm-2">
              <?php echo file_get_contents(get_template_directory().'/assets/images/icons/quotes.svg'); ?>
            </div>

            <div class="col-sm-10">
              <?php the_content(); ?>
            </div>
          </div>
        </div>
      <?php endif; ?>
      <?php $count++; ?>

    <?php endwhile;?>
  </div>

<?php endif; wp_reset_postdata(); ?>
