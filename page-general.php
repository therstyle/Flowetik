<?php 

/* Template Name: General */ 
get_header(); 
get_template_part('content-top-photo');

?>

<?php if (!empty(get_the_content())): ?>
	<section class="secondary">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<?php while(have_posts()): the_post(); ?>

						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<header>
								<h1 class="page-title"><?php the_title(); ?></h1>
							</header><!-- .entry-header -->

							<div class="entry-content">
								<?php the_content(); ?>
							</div><!-- .entry-content -->

							<?php edit_post_link('Edit', '<footer class="entry-meta"><span class="edit-link">', '</span></footer>'); ?>
						</article><!-- #post-## -->

					<?php endwhile; // end of the loop. ?>
				</div>
			</div>
		</div>
	</section>
<?php endif; ?>

<div id="repeater-container">
	<?php $count = 0; ?>
	<?php if(have_rows('sections')): while(have_rows('sections')): the_row(); //ACF Reapeter Loop ?>
		<?php include(locate_template('content-repeater-sections.php')); ?>
		<?php $count++; ?>
	<?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>
