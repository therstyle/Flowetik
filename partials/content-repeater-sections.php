<section id="id-<?php echo $count; ?>" class="repeater repeater-general">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<h3 class="headline no-margin"><?php the_sub_field('title'); ?></h3>
				<?php if (get_sub_field('sub_title') != NULL): ?>
					<h3 class="sub-title"><?php the_sub_field('sub_title'); ?></h3>
				<?php endif; ?>

				<?php
				$image = get_sub_field('image');
				$size = 'full'; // (thumbnail, medium, large, full or custom size)
				$attr = array(
				'class' => 'lg-top-space'
				);

				if ($image) {
					echo wp_get_attachment_image($image, $size, 0, $attr);
				}
				?>
			</div>
			<div class="col-md-8 col-md-offset-1">
				<div class="columns">
					<?php the_sub_field('content'); ?>
				</div>
				<hr class="xl" />
			</div>
		</div>
	</div>
</section>
