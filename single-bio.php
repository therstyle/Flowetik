<?php get_header(); ?>

<section class="general">
	<div class="container">
		<div class="row">
			<div class="col-md-3 grid-space">
				<?php the_post_thumbnail('bio', array('class' => 'img-center bio-portrait')); ?>
			</div>
			<div class="col-md-8 col-md-offset-1">
		    <?php while(have_posts()): the_post(); ?>
		      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		      	<header>
		      		<h1 class="page-title no-margin"><?php the_title(); ?></h1>
							<h3 class="sub-title"><?php the_field('position'); ?></h3>
							<hr class="lg" />
		      	</header><!-- .entry-header -->

		      	<div class="entry-content">
		      		<?php the_content(); ?>
		      	</div><!-- .entry-content -->

		      		<?php edit_post_link( __('Edit', 'rstyle'), '<span class="edit-link">', '</span>'); ?>
		      </article><!-- #post-## -->
		    <?php endwhile; // end of the loop. ?>
		  </div>
		</div>

		<div class="row">
			<?php if(have_rows('clients')):?>
				<div id="clients" class="col-md-7 lg-top-space">
					<h3>previous clients</h3>
					<div class="row">
					<?php while(have_rows('clients')): the_row(); //ACF Reapeter Loop ?>
						<div class="col-xs-12 col-sm-6 client">
							<div class="panel panel-default text-center">
								<div class="panel-body">
									<img src="<?php the_sub_field('client_logo'); ?>" alt="<?php the_sub_field('client_name'); ?>">
								</div>
							</div>
						</div>
					<?php endwhile; ?>
					</div>
				</div>
			<?php endif; ?>

			<?php if(get_field('accolades') != NULL || get_field('detailed_bio') != NULL || have_rows('social')): ?>
				<div id="details" class="col-md-4 lg-top-space <?php if(get_field('clients') != NULL): ?> col-md-offset-1<?php endif; ?>">
					<?php if(get_field('accolades') != NULL): ?>
						<h3>
							<?php if (get_field('accolade_title')!= NULL): ?>
								<?php the_field('accolade_title'); ?>
							<?php else: ?>
								accolades
							<?php endif; ?>
						</h3>
						<div class="lg-bottom-space">
							<?php the_field('accolades'); ?>
						</div>
					<?php endif; ?>

					<?php if(get_field('detailed_bio') != NULL): ?>
						<h3>detailed bio</h3>
						<a href="<?php the_field('detailed_bio'); ?>" target="_blank"><span class="fa fa-file-pdf-o sm-right-space"></span>download pdf</a>
					<?php endif; ?>

					<?php if (have_rows('social')): ?>
						<div class="lg-top-space">
							<h3>connect</h3>
							<?php while(have_rows('social')): the_row(); // ACF ?>
								<?php get_template_part('content-social'); ?>
							<?php endwhile; ?>
						</div>
					<?php endif; ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
</section>

<?php get_template_part('content-contact'); ?>
<?php get_footer(); ?>
