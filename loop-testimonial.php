<?php
$args = array(
  'post_type' => 'testimonial',
  'nopaging' => true
);
?>
<?php $testimonial_query = new WP_Query($args); ?>
<?php if ($testimonial_query->have_posts()): ?>
  <div class="carousel-inner" role="listbox">

    <?php $count = 0; // Use zero for count ?>
    <?php while ($testimonial_query->have_posts()): $testimonial_query->the_post(); ?>

      <?php if ($count == 0): ?>
        <div class="item active">
          <div class="row">
            <div class="col-sm-2">
              <svg class="quotes" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0" y="0" viewBox="0 0 76 76" xml:space="preserve"><path class="st0" d="M61.4 71C69.5 71 76 64.3 76 56c0-8.3-6.5-15-14.6-15C46.8 41 56.6 12 76 12V5C41.3 5 27.7 71 61.4 71zM19.4 71C27.5 71 34 64.3 34 56c0-8.3-6.5-15-14.6-15C4.8 41 14.6 12 34 12V5C-0.7 5-14.3 71 19.4 71z"/></svg>
            </div>

            <div class="col-sm-10">
              <?php the_content(); ?>
              <!--<div class="text-right">
                <h3 class="sub-title no-margin"><strong><?php the_title(); ?></strong></h3>
                <small><?php the_field('position'); ?></small>
              </div>-->
            </div>
          </div>
        </div>
      <?php else: ?>
        <div class="item">
          <div class="row">
            <div class="col-sm-2">
              <svg class="quotes" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0" y="0" viewBox="0 0 76 76" xml:space="preserve"><path class="st0" d="M61.4 71C69.5 71 76 64.3 76 56c0-8.3-6.5-15-14.6-15C46.8 41 56.6 12 76 12V5C41.3 5 27.7 71 61.4 71zM19.4 71C27.5 71 34 64.3 34 56c0-8.3-6.5-15-14.6-15C4.8 41 14.6 12 34 12V5C-0.7 5-14.3 71 19.4 71z"/></svg>
            </div>

            <div class="col-sm-10">
              <?php the_content(); ?>
              <!--<div class="text-right">
                <h3 class="sub-title no-margin"><strong><?php the_title(); ?></strong></h3>
                <small><?php the_field('position'); ?></small>
              </div>-->
            </div>
          </div>
        </div>
      <?php endif; ?>
      <?php $count++; ?>

    <?php endwhile;?>
  </div>

<?php endif; wp_reset_postdata(); ?>
