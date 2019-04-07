jQuery(document).ready(function(jQuery) {
    //Animation on Scroll
    AOS.init({
      offset: 200,
      duration: 300,
      easing: 'ease-in-sine',
      delay: 100,
      once: true
    });

    // Comments
    jQuery('.comment-reply-link').addClass('btn btn-primary');
    jQuery('#commentsubmit').addClass('btn btn-primary');

    // WordPress Default Widgets
    jQuery('input.search-field').addClass('form-control');
    jQuery('input.search-submit').addClass( 'btn btn-default');
    jQuery('.widget_rss ul').addClass('media-list');
    jQuery('.widget_meta ul, .widget_recent_entries ul, .widget_archive ul, .widget_categories ul, .widget_nav_menu ul, .widget_pages ul').addClass('nav');
    jQuery('.widget_recent_comments ul#recentcomments').css('list-style', 'none').css('padding-left', '0');
    jQuery('.widget_recent_comments ul#recentcomments li').css('padding', '5px 15px');
    jQuery('table#wp-calendar').addClass('table table-striped');
    jQuery('ul.page-numbers').addClass('pagination');
    jQuery('ul.pagination').removeClass('page-numbers');
    jQuery('ul.pagination .current').parent().addClass('active');
    jQuery('.widget_categories ul.nav').removeClass();

    // Inputs
    jQuery('input.search-field').addClass('form-control');

    // Formidable
    jQuery('.frm_forms input[type="text"], .frm_forms input[type="email"], .frm_forms input[type="number"], .frm_forms textarea, .frm_forms select').addClass('form-control');
    jQuery('.form-field').addClass('form-group');
    jQuery('.frm_submit').addClass('text-right');
    jQuery('.frm_submit button').addClass('btn btn-primary');

    // Animatescroll
    jQuery('#video .down-arrow, .home .intro-scroll a').click(function(){
      jQuery('#intro').animatescroll({padding:96});
    });
    jQuery('.home .intro-scroll').removeClass('active');
});
