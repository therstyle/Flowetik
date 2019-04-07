<?php get_header(); ?>

<div class="bg-video">
	<div class="video">
		<video autoplay="true" muted="true" loop="true" class="full-height">
			<source src="<?php echo get_template_directory_uri(); ?>/video/flowetik-web.mp4" type="video/mp4" />
			<source src="<?php echo get_template_directory_uri(); ?>/video/flowetik-web.ogv" type="video/ogg" />
		</video>
	</div>
</div>

<section id="video" class="bg-dark">
	<div class="container">
		<div class="row">
	    <div class="col-xs-12">
	      <?php while (have_posts()): the_post(); ?>
	        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	        	<header>
							<h1><?php the_field('video_headline'); ?></h1>
							<h2 class="slogan"><?php the_field('video_sub_headline'); ?></h2>
	        	</header><!-- .entry-header -->
	        </article><!-- #post-## -->
	      <?php endwhile; // end of the loop. ?>
	    </div>
	  </div>
		<div class="row absolute">
			<div class="col-xs-12">
				<svg class="down-arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0" y="0" viewBox="0 0 490.4 490.4" xml:space="preserve" enable-background="new 0 0 490.4 490.4"><path d="M490.4 245.2C490.4 110 380.4 0 245.2 0S0 110 0 245.2s110 245.2 245.2 245.2S490.4 380.4 490.4 245.2zM24.5 245.2c0-121.7 99-220.7 220.7-220.7s220.7 99 220.7 220.7 -99 220.7-220.7 220.7S24.5 366.9 24.5 245.2z"/><path d="M253.9 360.4l68.9-68.9c4.8-4.8 4.8-12.5 0-17.3s-12.5-4.8-17.3 0l-48 48V138.7c0-6.8-5.5-12.3-12.3-12.3s-12.3 5.5-12.3 12.3v183.4l-48-48c-4.8-4.8-12.5-4.8-17.3 0s-4.8 12.5 0 17.3l68.9 68.9c2.4 2.4 5.5 3.6 8.7 3.6S251.5 362.8 253.9 360.4z"/></svg>
			</div>
		</div>
	</div>
</section>

<section id="intro" class="bg-white">
	<a name="intro"></a>
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div id="leaders" class="row xl-bottom-space">
					<div class="col-md-5">
						<h2 class="headline text-center"><?php the_field('leaders_headline'); ?></h2>
						<?php the_field('leaders_text'); ?>
					</div>
					<div class="col-md-5 col-md-offset-2" data-aos="fade" data-aos-anchor-placement="top-bottom" data-aos-duration="900">
						<img src="<?php the_field('leaders_image'); ?>" class="img-center">
					</div>
				</div>

				<div id="promise" class="row xl-bottom-space">
					<div class="col-md-5" data-aos="fade" data-aos-anchor-placement="top-bottom" data-aos-duration="900">
						<img src="<?php the_field('promise_image'); ?>" class="img-center">
					</div>
					<div class="col-md-6 col-md-offset-1 grid-space">
						<h2 class="headline text-center"><?php the_field('promise_headline'); ?></h2>
						<?php the_field('promise_text'); ?>
					</div>
				</div>

				<div id="ideas" class="row">
					<div class="col-xs-12">
						<div class="row xl-bottom-space">
							<div class="col-xs-12">
								<h2 class="headline text-center"><?php the_field('ideas_headline'); ?></h2>
								<?php the_field('ideas_text'); ?>
							</div>
						</div>
						<div class="row">
							<div class="col-md-8">
								<?php if(have_rows('idea')): while(have_rows('idea')): the_row(); //ACF Reapeter Loop ?>
									<h3><?php the_sub_field('idea_headline'); ?></h3>
									<div class="lg-bottom-space">
										<?php the_sub_field('idea_text'); ?>
									</div>
								<?php endwhile; endif; ?>
							</div>
							<div class="col-md-4" data-aos="fade" data-aos-anchor-placement="top-bottom" data-aos-duration="900">
								<img src="<?php the_field('ideas_image'); ?>" class="img-center">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="testimonials" class="bg-dark">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h2 class="headline text-center"><?php the_field('testimonials_headline'); ?></h2>
				<div id="testimonial-slider" class="carousel slide" data-ride="carousel">
					<?php get_template_part('loop-testimonial'); ?>
					<?php get_template_part('loop-testimonial-controls'); ?>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="team" class="bg-white">
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<h2 class="headline text-center"><?php the_field('team_headline'); ?></h2>
				<div class="xl-bottom-space">
					<?php the_field('team_text'); ?>
				</div>

				<?php get_template_part('loop-bio'); ?>
			</div>
		</div>
	</div>
</section>

<?php get_template_part('content-contact'); ?>
<?php get_footer(); ?>
