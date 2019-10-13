<?php 

require_once get_template_directory().'/Controllers/Blog.php';

use Controllers\Blog as Blog;
$blog = new Blog();

get_header();
extract(get_vars($blog)); 

?>

<?php if($get_info['image']): ?>
  <section class="top-image" style="background-image:url(<?php echo $get_info['image']; ?>);"></section>
<?php endif; ?>

<section>
  <div class="container">
    <div class="col-md-12">
      <h1 class="page-title lg-bottom-space">
        <?php
        if (is_home()) {
          if ($get_info['title']) {
            echo $get_info['title'];
          }
         else {
          echo 'blog';
          }
        }

        if (is_category()) {
          single_cat_title();
        }

        if (is_author()) {
          echo 'Author Archives for '.get_the_author();
        }

        if (is_tag()) {
          echo single_tag_title('', false).' Articles';
        }

        if (is_search()) {
          printf('Search Results for: %s', '<span>'.get_search_query().'</span>');
        }
        ?>
      </h1>

      <?php get_template_part('partials/loop'); ?>
      <?php get_pagination(); ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>
