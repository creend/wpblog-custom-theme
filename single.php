<?php 
	get_header();
?>
	<?php 
		if(have_posts()){
			while(have_posts()){
				the_post();
				$post_type = get_post_type();
				get_template_part('template-parts/article',$post_type);
			}
		}
	?>
<?php 
	get_footer();
?>