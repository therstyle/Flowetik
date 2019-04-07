<?php get_header(); ?>
<?php if (get_field('blog_image', 'option') != NULL): ?>
  <section class="top-image" style="background-image:url(<?php the_field('blog_image', 'option'); ?>);"></section>
<?php endif; ?>

<section>
  <div class="container">
    <div class="col-md-12">
      <h1 class="page-title lg-bottom-space">
        <?php
        if (is_home)
          {
            if (get_field('blog_index_title', 'option') != NULL)
             {
              the_field('blog_index_title', 'option');
             }
            else
              {
              echo 'blog';
              }
          }

        if (is_category())
          {
          single_cat_title();
          }

        if (is_author())
          {
          echo 'Author Archives for '.get_the_author();
          }

        if (is_tag())
          {
          echo single_tag_title('', false).' Articles';
          }

        if (is_search())
          {
          printf( __('Search Results for: %s', 'rstyle' ), '<span>'.get_search_query().'</span>');
          }
        ?>
      </h1>

      <?php get_template_part('loop'); ?>
      <?php get_template_part('pagination'); ?>
    </div>
  </div>
</section>

<?php get_template_part('content-contact'); ?>
<?php get_footer(); ?>
