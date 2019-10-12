<?php 

/* Template Name: General */ 

require_once get_template_directory().'/Controllers/General.php';

use Controllers\General as General;
$general = new General();

get_header(); 
get_template_part('partials/content','top-photo');

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

<div id="repeater-container">
	<?php 
	if($general->get_sections()) {
		foreach($general->get_sections()['section'] as $section) {
			set_query_var('count', 0);
			set_query_var('image', $section['image']);
			set_query_var('title', $section['title']);
			set_query_var('sub_title', $section['sub_title']);
			set_query_var('content', $section['content']);
			get_template_part('partials/content','repeater-sections');
		}
	} 
	?>
</div>

<?php get_footer(); ?>
