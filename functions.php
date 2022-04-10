<?php 

function myblog_theme_support(){
  add_theme_support('post-thumbnails', array("post"));
}
add_action('after_setup_theme', 'myblog_theme_support');

function myblog_register_styles(){
  wp_enqueue_style("bootstrap", get_template_directory_uri()."/assets/css/bootstrap.css",array(),'3.0.0','all');
  wp_enqueue_style("flexslider", get_template_directory_uri()."/assets/css/flexslider.css",array(),'2.0','all');
  wp_enqueue_style("magnific-popup", get_template_directory_uri()."/assets/css/magnific-popup.css",array(),'1.0','all');
  wp_enqueue_style("responsive", get_template_directory_uri()."/assets/css/responsive.css",array(),'1.0','all');
  wp_enqueue_style("style", get_template_directory_uri()."/style.css",array(),'1.6.2','all');
}
add_action('wp_enqueue_scripts','myblog_register_styles');

function myblog_register_scripts(){
  wp_enqueue_script("jquery.min", get_template_directory_uri()."/assets/js/jquery.min.js",array(),'1.10.2',true);
  wp_enqueue_script("jquery.migrate", get_template_directory_uri()."/assets/js/jquery.migrate.js",array(),'1.0.0',true);
  wp_enqueue_script("jquery.imagesloaded", get_template_directory_uri()."/assets/js/jquery.imagesloaded.min.js",array(),'1.0',true);
  wp_enqueue_script("jquery.isotope", get_template_directory_uri()."/assets/js/jquery.isotope.min.js",array(),'1.5.05',true);
  wp_enqueue_script("jquery.magnific-popup", get_template_directory_uri()."/assets/js/jquery.magnific-popup.min.js",array(),'0.9.6',true);
  wp_enqueue_script("jquery.flexslider", get_template_directory_uri()."/assets/js/jquery.flexslider.js",array(),'2.1',true);
  wp_enqueue_script("retina", get_template_directory_uri()."/assets/js/retina-1.1.0.min.js",array(),'1.1.0',true);
  wp_enqueue_script("jquery.nicescroll.min", get_template_directory_uri()."/assets/js/jquery.nicescroll.min.js",array(),'3.5.4',true);
  wp_enqueue_script("script", get_template_directory_uri()."/assets/js/script.js",array(),'1.2.1', true);
}
add_action('wp_enqueue_scripts', 'myblog_register_scripts');

function myblog_menus(){
  $location = array(
    "main" => "Main Menu",
    "social_media" => "Social media",
  );
  register_nav_menus($location);
}

add_action('init','myblog_menus');

function myblog_add_custom_types( $query ) {
    if((is_tag() || is_category() || is_archive() || is_front_page() || is_home()) && $query->is_main_query() ) {
      $query->set( 'post_type', array("post", "video", "quote") );
    }
}
add_filter( 'pre_get_posts', 'myblog_add_custom_types' );