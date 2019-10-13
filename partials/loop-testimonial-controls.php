<?php

$args = [
  'post_type' => 'testimonial',
  'nopaging' => true
];

$testimonial_query = new WP_Query($args);
$count = 1;

?>

<?php if ($testimonial_query->have_posts()): ?>
  <ol class="carousel-indicators">
    <?php while ($testimonial_query->have_posts()): $testimonial_query->the_post(); ?>
      <?php if ($count == 0): ?>
        <li data-target=".carousel" data-slide-to="<?php echo $count; ?>" class="active first-item"></li>
      <?php else: ?>
        <li data-target=".carousel" data-slide-to="<?php echo $count; ?>"></li>
      <?php endif; ?>
    <?php $count++; ?>

    <?php endwhile; ?>
  </ol>
<?php endif; wp_reset_postdata(); ?>
