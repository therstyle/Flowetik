<?php 

require_once get_template_directory().'/Controllers/FrontPage.php';

use Controllers\FrontPage as FrontPage;
$front_page = new FrontPage();

get_header();
extract(get_vars($front_page));
?>

<?php if($get_video['mp4']|| $get_video['ogv']): ?>
	<div class="bg-video">
		<div class="video">
			<video autoplay="true" muted="true" loop="true" class="full-height" poster="<?php echo $get_video['poster']; ?>">
				<?php if($get_video['mp4']): ?>
					<source src="<?php echo $get_video['mp4']; ?>" type="video/mp4" />
				<?php endif; ?>

				<?php if($get_video['ogv']): ?>
					<source src="<?php echo $get_video['ogv']; ?>" type="video/ogv" />
				<?php endif; ?>
			</video>
		</div>
	</div>

	<?php if($get_video['headline'] || $get_video['sub_headline']): ?>
		<section id="video" class="bg-dark">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<article>
							<header>
								<?php if($get_video['headline']): ?>
									<h1><?php echo $get_video['headline']; ?></h1>
								<?php endif; ?>
								
								<?php if($get_video['sub_headline']): ?>
									<h2 class="slogan"><?php echo $get_video['sub_headline']; ?></h2>
								<?php endif; ?>
							</header>
						</article>
					</div>
				</div>
				<div class="row absolute">
					<div class="col-xs-12">
						<?php echo file_get_contents(get_template_directory().'/assets/images/icons/down-arrow.svg'); ?>
					</div>
				</div>
			</div>
		</section>
	<?php endif; ?>
<?php endif; ?>

<section id="intro" class="bg-white">
	<a name="intro"></a>
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div id="leaders" class="row xl-bottom-space">
					<div class="col-md-5">
						<?php if($get_leaders['headline']): ?>
							<h2 class="headline text-center"><?php echo $get_leaders['headline']; ?></h2>
						<?php endif; ?>

						<?php if($get_leaders['text']): ?>
							<?php echo $get_leaders['text']; ?>
						<?php endif; ?>
					</div>

					<?php if($get_leaders['image']): ?>
						<div class="col-md-5 col-md-offset-2" data-aos="fade" data-aos-anchor-placement="top-bottom" data-aos-duration="900">
							<img src="<?php echo $get_leaders['image']; ?>" class="img-center">
						</div>
					<?php endif; ?>
				</div>
				
				<div id="promise" class="row xl-bottom-space">
					<?php if($get_promise['image']): ?>
						<div class="col-md-5" data-aos="fade" data-aos-anchor-placement="top-bottom" data-aos-duration="900">
								<img src="<?php echo $get_promise['image']; ?>" class="img-center">
						</div>
					<?php endif; ?>

					<?php if($get_promise['headline'] || $get_promise['text']): ?>
						<div class="col-md-6 col-md-offset-1 grid-space">
							<?php if($get_promise['headline']): ?>
								<h2 class="headline text-center"><?php echo $get_promise['headline']; ?></h2>
							<?php endif; ?>

							<?php if($get_promise['text']): ?>
								<?php echo $get_promise['text']; ?>
							<?php endif; ?>
						</div>
					<?php endif; ?>
				</div>

				<div id="ideas" class="row">
					<div class="col-xs-12">
						<?php if($get_ideas['headline'] || $get_ideas['text']): ?>
							<div class="row xl-bottom-space">
								<div class="col-xs-12">
									<?php if($get_ideas['headline']): ?>
										<h2 class="headline text-center"><?php echo $get_ideas['headline']; ?></h2>
									<?php endif; ?>

									<?php if($get_ideas['text']): ?>
										<?php echo $get_ideas['text'] ?>
									<?php endif; ?>
								</div>
							</div>
						<?php endif; ?>

						<div class="row">
							<div class="col-md-8">
								<?php if($get_idea): ?>
									<?php foreach($get_idea['idea'] as $idea): ?>
										<h3><?php echo $idea['headline']; ?></h3>
										<div class="lg-bottom-space">
											<?php echo $idea['text']; ?>
										</div>
									<?php endforeach; ?>
								<?php endif; ?>
							</div>

							<?php if($get_ideas['text']): ?>
								<div class="col-md-4" data-aos="fade" data-aos-anchor-placement="top-bottom" data-aos-duration="900">
									<img src="<?php echo $get_ideas['image']; ?>" class="img-center">
								</div>
							<?php endif; ?>
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
				<?php if ($get_testimonials['headline']): ?>
					<h2 class="headline text-center"><?php echo $get_testimonials['headline']; ?></h2>
				<?php endif; ?>

				<div id="testimonial-slider" class="carousel slide" data-ride="carousel">
					<?php get_template_part('partials/loop', 'testimonial'); ?>
					<?php get_template_part('partials/loop', 'testimonial-controls'); ?>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="team" class="bg-white">
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<?php if($get_team['headline']): ?>
					<h2 class="headline text-center"><?php echo $get_team['headline']; ?></h2>
				<?php endif; ?>

				<?php if($get_team['text']): ?>
					<div class="xl-bottom-space">
						<?php $get_team['text']; ?>
					</div>
				<?php endif; ?>

				<?php get_template_part('partials/loop', 'bio'); ?>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
