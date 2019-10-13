jQuery(document).ready(function($) {
    //Animation on Scroll
    AOS.init({
      offset: 200,
      duration: 300,
      easing: 'ease-in-sine',
      delay: 100,
      once: true
    });

    // Comments
    $('.comment-reply-link').addClass('btn btn-primary');
    $('#commentsubmit').addClass('btn btn-primary');

    // WordPress Default Widgets
    $('input.search-field').addClass('form-control');
    $('input.search-submit').addClass( 'btn btn-default');
    $('.widget_rss ul').addClass('media-list');
    $('.widget_meta ul, .widget_recent_entries ul, .widget_archive ul, .widget_categories ul, .widget_nav_menu ul, .widget_pages ul').addClass('nav');
    $('.widget_recent_comments ul#recentcomments').css('list-style', 'none').css('padding-left', '0');
    $('.widget_recent_comments ul#recentcomments li').css('padding', '5px 15px');
    $('table#wp-calendar').addClass('table table-striped');
    $('ul.page-numbers').addClass('pagination');
    $('ul.pagination').removeClass('page-numbers');
    $('ul.pagination .current').parent().addClass('active');
    $('.widget_categories ul.nav').removeClass();

    // Inputs
    $('input.search-field').addClass('form-control');

    // Formidable
    $('.frm_forms input[type="text"], .frm_forms input[type="email"], .frm_forms input[type="number"], .frm_forms textarea, .frm_forms select').addClass('form-control');
    $('.form-field').addClass('form-group');
    $('.frm_submit').addClass('text-right');
    $('.frm_submit button').addClass('btn btn-primary');

    // Animatescroll
    $('#video .down-arrow, .home .intro-scroll a').click(function(){
      $('#intro').animatescroll({padding:96});
    });
    $('.home .intro-scroll').removeClass('active');
});
