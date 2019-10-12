<?php if (!is_page('contact') && !is_404()): ?>
	<?php get_template_part('partials/content', 'contact'); ?>
<?php endif; ?>

</div><!-- /#top-wrapper -->

	<div id="bottom-wrapper">
		<footer id="footer" class="footer text-center" role="contentinfo">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-4">
						<div class="pull-left">
							<a href="<?php echo home_url(); ?>"><?php echo file_get_contents(get_template_directory().'/assets/images/flowetik-logo.svg'); ?></a>
						</div>
					</div>
					<div class="col-xs-12 col-sm-4">
						&copy; <?php echo date('Y'); ?> - <?php echo bloginfo('name'); ?> all rights reserved
					</div>
					<div class="col-xs-12 col-sm-4">
						<div id="rstyle" class="pull-right">
							<div class="sig">
								<a href="https://rstyledesign.com">Web Design</a>
								By
								<?php echo file_get_contents(get_template_directory().'/assets/images/rstyle-design-logo.svg'); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div><!-- /#bottom-wrapper -->
</div><!-- /#wrapper -->

<?php wp_footer(); ?>
<!-- Google Analytics -->
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-97848448-1', 'auto');
ga('send', 'pageview');
</script>
<!-- End Google Analytics -->
</body>
</html>
