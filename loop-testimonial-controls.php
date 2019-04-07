<?php
$args = array(
  'post_type' => 'testimonial',
  'nopaging' => true
);
?>
<?php $testimonial_query = new WP_Query($args); ?>
<?php if ($testimonial_query->have_posts()): ?>

<?php $count = 1; // Use one for count ?>
<ol class="carousel-indicators">
<?php while ($testimonial_query->have_posts()): $testimonial_query->the_post(); ?>
  <?php if ($count == 0): ?>
    <li data-target=".carousel" data-slide-to="<?php echo $count; ?>" class="active first-item"></li>
  <?php else: ?>
    <li data-target=".carousel" data-slide-to="<?php echo $count; ?>"></li>
  <?php endif; ?>
<?php $count++; ?>

<?php endwhile; ?>
</ol><!-- /carousel indicators -->

<?php endif; wp_reset_postdata(); ?>
