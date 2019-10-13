<?php

require_once get_template_directory().'/Controllers/Footer.php';

use Controllers\Footer as Footer;
$footer = new Footer();

extract(get_vars($footer))

?>

<section id="quick-contact">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="row">
          <div class="col-md-4 grid-space">
            <?php if($get_contact['headline'] || $get_contact['text']): ?>
              <?php if($get_contact['headline']): ?>
                <h2 class="headline"><?php echo $get_contact['headline']; ?></h2>
              <?php endif; ?>

              <?php if($get_contact['text']): ?>
                <?php echo $get_contact['text']; ?>
              <?php endif; ?>
            <?php endif; ?>
            
            <?php if($get_social): ?>
  						<div class="lg-top-space">
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

          <div class="col-md-7 col-md-offset-1">
            <?php echo do_shortcode('[formidable id='.$get_contact['id'].']'); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
