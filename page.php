<?php 

get_header(); 
get_template_part('content-top-photo');

?>

<?php if (is_page('contact')): ?>
	<div id="contact">
		<?php get_template_part('partials/content', 'contact'); ?>
	</div>
<?php else: ?>
	<section class="secondary">
		<div class="container">
			<div class="row">
				 <div class="col-xs-12">
					 <?php while(have_posts()): the_post(); ?>
						 <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							 <header>
								 <h1 class="page-title"><?php the_title(); ?></h1>
							 </header>

							 <div class="entry-content">
								 <?php the_content(); ?>
							 </div>

							 <?php edit_post_link('Edit', '<footer class="entry-meta"><span class="edit-link">', '</span></footer>'); ?>
						 </article>
					 <?php endwhile; ?>
				 </div>
		  </div>
		</div>
	</section>
<?php endif; ?>

<?php if (!is_page('contact')): ?>
	<?php get_template_part('partials/content', 'contact'); ?>
<?php endif; ?>

<?php get_footer(); ?>
