<?php if (have_posts()) : ?>

<?php echo '<div class="row">'; // Begin bootstrap row output ?>
<?php $count = 3; ?>

<?php while (have_posts()): the_post(); ?>
  <?php get_template_part('content-loop'); ?>
  <?php $count++; ?>

  <?php // number of columns in row
    if($count % 3 == 0)
    {
    echo '</div> <div class="row">';
    }
  ?>

<?php endwhile;?>

  <?php echo '</div><!-- end dynamic row -->'; // End bootstrap row output ?>

<?php else: ?>

  <div class="row">
    <div class="col-md-12">
    Sorry, no results found.
    </div>
  </div>

<?php endif; ?>
