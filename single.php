<?php get_header(); ?>

<section>
	<div class="container">
		<div class="row">
			<div class="col-md-4 grid-space">
				<?php the_post_thumbnail('article', ['class' => 'img-center article-thumb']); ?>
			</div>

			<div class="col-md-7 col-md-offset-1">
		    <?php while(have_posts()): the_post(); ?>
		      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		      	<header>
							<div class="row">
								<div class="col-xs-2">
									<div class="date-icon">
						        <span class="month"><?php the_time('M'); ?></span>
						        <span class="day"><?php the_time('j'); ?></span>
						      </div>
								</div>
								<div class="col-xs-10">
									<h1 class="page-title"><?php the_title(); ?></h1>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12">
									<small>Written By <?php the_author(); ?></small>
									<hr />
								</div>
							</div>
		      	</header><!-- .entry-header -->

		      	<div class="entry-content">
		      		<?php the_content(); ?>
		      	</div><!-- .entry-content -->

		      		<?php edit_post_link('Edit', '<span class="edit-link">', '</span>'); ?>

							<h3>share</h3>
							<!-- Go to www.addthis.com/dashboard to customize your tools --> 
							<div class="addthis_inline_share_toolbox_nsuu"></div>
		      </article><!-- #post-## -->
		    <?php endwhile; // end of the loop. ?>
		  </div>
		</div>

		<?php if (is_active_sidebar('sidebar-left') || is_active_sidebar('sidebar-right')): ?>
			<div class="row">
				<div class="col-xs-12">
					<hr class="xl" />
				</div>
			</div>

			<div class="row">
				<?php if (is_active_sidebar('sidebar-left')): ?>
					<div class="col-md-4 grid-space">
						<?php dynamic_sidebar('sidebar-left'); ?>
					</div>
				<?php endif; ?>

				<?php if (is_active_sidebar('sidebar-right')): ?>
					<div class="col-md-7 <?php if (is_active_sidebar('sidebar-left')): ?> col-md-offset-1<?php endif; ?>">
						<?php dynamic_sidebar('sidebar-right'); ?>
					</div>
				<?php endif; ?>
			</div>
		<?php endif; ?>
	</div>
</section>

<?php get_footer(); ?>
