<?php

require_once get_template_directory().'/Controllers/Bio.php';

use Controllers\Bio as Bio;
$bio = new Bio();

$args = [
  'post_type' => 'bio',
  'nopaging' => true
];

$bio_query = new WP_Query($args);
$count = 4;

?>

<?php if ($bio_query->have_posts()): ?>
  <div class="row">
    <?php while ($bio_query->have_posts()): $bio_query->the_post(); ?>
      <div <?php post_class('col-md-3 text-center grid-space'); ?>>
        <p>
          <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail('bio-thumb', ['class' => 'img-center bio-portrait']); ?>
          </a>
        </p>

        <h3 class="sub-title sm-bottom-space">
          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h3>
        
        <small><?php echo $bio->get_info()['position']; ?></small>
      </div>

      <?php $count++; ?>

      <?php if($count % 4 == 0): ?>
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
<?php endif; wp_reset_postdata(); ?>
