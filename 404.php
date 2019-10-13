<?php 

require_once get_template_directory().'/Controllers/404.php';

use Controllers\Error404 as Error404;
$error = new Error404();

get_header(); 
extract(get_vars($error));

?>

<div class="container error-404 not-found">
	<div class="row">
    <div class="col-md-12">
      <header>
    		<h1 class="page-title">
					<?php 
					if($get_info['headline']) {
						echo $get_info['headline'];
					}
					else {
						echo '404';
					}
					?>
				</h1>
    	</header><!-- .page-header -->

    	<div class="page-content">
				<?php if( $get_info['text']) {
					echo $get_info['text'];
				}
				?>
				<a href="<?php echo home_url(); ?>" class="btn btn-default">Return Home?</a>
    	</div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
