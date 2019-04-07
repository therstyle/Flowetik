<?php get_header(); ?>

<div class="container error-404 not-found">
	<div class="row">
    <div class="col-md-12">
      <header>
    		<h1 class="page-title">Oops! Something went wrong here.</h1>
    	</header><!-- .page-header -->

    	<div class="page-content">
				<p>We couldn't find the page you were looking for. This is either because:</p>

				<ul>
				<li>There is an error in the URL entered into your web browser. Please check the URL and try again.</li>
				<li>The page you are looking for has been moved or deleted.</li>
				</ul>

				<a href="<?php echo home_url(); ?>" class="btn btn-default">Return Home?</a>
    	</div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
