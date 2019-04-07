<?php if (has_post_thumbnail()): ?>
  <section class="top-image general-image" style="background-image:url(<?php the_post_thumbnail_url('full'); ?>);"></section>
<?php endif; ?>
