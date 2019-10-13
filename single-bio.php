<?php 

require_once get_template_directory().'/Controllers/Bio.php';

use Controllers\Bio as Bio;
$bio = new Bio();

get_header(); 
extract(get_vars($bio));
?>

<section class="general">
	<div class="container">
		<div class="row">
			<div class="col-md-3 grid-space">
				<?php the_post_thumbnail('bio', ['class' => 'img-center bio-portrait']); ?>
			</div>
			<div class="col-md-8 col-md-offset-1">
		    <?php while(have_posts()): the_post(); ?>
		      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		      	<header>
							<h1 class="page-title no-margin"><?php the_title(); ?></h1>
							
							<?php if($get_info['position']): ?>
								<h3 class="sub-title"><?php echo $get_info['position']; ?></h3>
							<?php endif; ?>

							<hr class="lg" />
		      	</header>

		      	<div class="entry-content">
		      		<?php the_content(); ?>
		      	</div>

		      		<?php edit_post_link('Edit', '<span class="edit-link">', '</span>'); ?>
		      </article>
		    <?php endwhile; ?>
		  </div>
		</div>

		<div class="row">
			<?php if($get_clients['clients']):?>
				<div id="clients" class="col-md-7 lg-top-space">
					<h3>previous clients</h3>
					<div class="row">
						<?php foreach($get_clients['clients'] as $client): ?>
							<div class="col-xs-12 col-sm-6 client">
								<div class="panel panel-default text-center">
									<div class="panel-body">
										<img src="<?php echo $client['client_logo']; ?>" alt="<?php echo $client['client_name']; ?>">
									</div>
								</div>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
			<?php endif; ?>

			<?php if($get_info['accolades'] || $get_info['detailed_bio'] || $get_social): ?>
				<div id="details" class="col-md-4 lg-top-space <?php if($get_info['clients']): ?> col-md-offset-1<?php endif; ?>">
					<?php if($get_info['accolades']): ?>
						<h3>
							<?php if ($get_info['accolade_title']): ?>
								<?php echo $get_info['accolade_title']; ?>
							<?php else: ?>
								accolades
							<?php endif; ?>
						</h3>

						<div class="lg-bottom-space">
							<?php echo $get_info['accolades']; ?>
						</div>
					<?php endif; ?>

					<?php if($get_info['detailed_bio']): ?>
						<h3>detailed bio</h3>
						
						<a href="<?php echo $get_info['detailed_bio']; ?>" target="_blank"><span class="fa fa-file-pdf-o sm-right-space"></span>download pdf</a>
					<?php endif; ?>

					<?php if ($get_social): ?>
						<div class="lg-top-space">
							<h3>connect</h3>
							<?php 
							foreach($get_social['social'] as $social) {
								set_query_var('url', $social['url']);
								set_query_var('type', $social['type']);
								get_template_part('partials/content','social');
							}
							?>
						</div>
					<?php endif; ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>

