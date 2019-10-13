<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<?php if(has_site_icon()): ?>
		<?php wp_site_icon(); ?>
	<?php else: ?>
		<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/images/browser-icons/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/images/browser-icons/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/images/browser-icons/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/images/browser-icons/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/images/browser-icons/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/images/browser-icons/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/images/browser-icons/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/images/browser-icons/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/images/browser-icons/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo get_template_directory_uri(); ?>/images/browser-icons/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/images/browser-icons/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri(); ?>/images/browser-icons/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/images/browser-icons/favicon-16x16.png">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/images/browser-icons/ms-icon-144x144.png">
	<?php endif; ?>

	<?php wp_head(); ?>
</head>

<body
<?php if (is_page() && has_post_thumbnail()): ?>
	<?php body_class('has-top-image'); ?>
<?php else: ?>
	<?php body_class(); ?>
<?php endif; ?>>

<div id="wrapper">
	<div id="top-wrapper">
		<header id="header" class="header" role="banner">
			<nav class="site-navigation">
				<div class="container">
					<div class="row">
						<div class="site-navigation-inner col-sm-12">
							<div class="navbar navbar-default">
								<div class="navbar-header">
									<a class="navbar-brand" href="<?php echo home_url(); ?>">
										<?php if(has_header_image()): ?>
											<img class="logo" src="<?php header_image(); ?>" alt="" />
										<?php else: ?>
											<?php echo bloginfo('sitename'); ?>
										<?php endif; ?>
									</a>
									<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
										<span class="sr-only"><?php _e('Toggle navigation','_tk') ?> </span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>

								<?php wp_nav_menu(
									[
										'theme_location' 	=> 'primary',
										'depth'             => 2,
										'container'         => 'nav',
										'container_id'      => 'navbar-collapse',
										'container_class'   => 'collapse navbar-collapse',
										'menu_class' 		=> 'nav navbar-nav navbar-right',
										'fallback_cb' 		=> 'wp_bootstrap_navwalker::fallback',
										'menu_id'			=> 'main-menu',
										'walker' 			=> new wp_bootstrap_navwalker()
									]
								); ?>

							</div><!-- .navbar -->
						</div>
					</div>
				</div><!-- .container -->
			</nav><!-- .site-navigation -->
		</header>
