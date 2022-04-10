<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="utf-8">
  <title><?php echo get_bloginfo('name');?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>

	<?php 
		wp_head();
	?>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	
</head>
<body>

	<!-- Container -->
<div id="container">
  <!-- Header
      ================================================== -->
  <header>
    <div class="logo-box">
      <div class="logo"><img alt="logo" src="<?php echo get_template_directory_uri()."/assets/images/logo.png"?>"></div>
      <p class="slogan"><?php echo get_bloginfo('description');?></p>
    </div>

    <a class="elemadded responsive-link" href="#">Menu</a>

    <div class="menu-box">
      <?php 
        wp_nav_menu(
          array(
            'menu' => 'main',
            'container' => '',
            'theme_location' => 'main'
          ),
        );
      ?>
    </div>
    
    <div class="categories-box">
      <h2>Categories</h2>
      <ul class="categories">
        <?php 
          $categories = get_categories();
          foreach($categories as $category):
        ?>
          <li><a href="<?php echo get_category_link($category->term_id)?>"><?php echo $category->name ?></a></li>
        <?php endforeach?>
      </ul>
    </div>

    <div class="social-box">
      <?php 
        wp_nav_menu(
          array(
            'menu' => 'social_media',
            'theme_location' => 'social_media',
            'container' => '',
            'menu_class' => 'social-icons'
          )
        )
      ?>
      <!-- <ul class="social-icons" id="social_media">
        <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
        <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
        <li><a href="#"><i class="fa fa-rss-square"></i></a></li>
        <li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
        <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
        <li><a href="#"><i class="fa fa-pinterest-square"></i></a></li>
        <li><a href="#"><i class="fa fa-flickr"></i></a></li>
        <li><a href="#"><i class="fa fa-youtube-square"></i></a></li>
        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
      </ul> -->
    </div>
    <p class="copyright">&#169; 2014 Grafika, All Rights Reserved</p>
  </header>
  <!-- End Header -->

  <!-- BEGIN OF POSTS SECTION -->
