<section id="id-<?php echo $count; ?>" class="repeater repeater-general">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<h3 class="headline no-margin"><?php echo $title; ?></h3>
				<?php if ($sub_title): ?>
					<h3 class="sub-title"><?php echo $sub_title; ?></h3>
				<?php endif; ?>

				<?php
				$attr = [
				'class' => 'lg-top-space'
				];

				if ($image) {
					echo wp_get_attachment_image($image, 'full', 0, $attr);
				}
				?>
			</div>
			<div class="col-md-8 col-md-offset-1">
				<div class="columns">
					<?php echo $content; ?>
				</div>
				<hr class="xl" />
			</div>
		</div>
	</div>
</section>
<?php $count++; ?>
