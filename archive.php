<?php 
	get_header();
?>
  <section class="blog-box">
    <?php 
      if(have_posts()){
        while(have_posts()){
          the_post();
          $post_type = get_post_type();
          get_template_part('template-parts/card',$post_type);
        }
      }
	  ?>
  </section>
  <div class="pagination-wrapper">
    <?php 
      the_posts_pagination();
    ?>
  </div>
<?php 
	get_footer();
?>