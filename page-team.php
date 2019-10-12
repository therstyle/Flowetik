<?php 

/* Template Name: Team */ 

	get_header(); 
	get_template_part('content-top-photo');
?>

<section class="secondary">
	<div class="container">
		<div class="row xl-bottom-space">
	    <div class="col-md-10 col-md-offset-1">
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

		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<?php get_template_part('partials/loop','bio'); ?>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
