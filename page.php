<?php 
	get_header();
?>
	<div id="content">
		<div class="inner-content">
					
			<div class="blog-page">
					<?php 
					if(have_posts()){
						while(have_posts()){
							the_post();
							the_content();
						}
					}
				?>
			</div>

		</div>
	</div>
</div>
<?php 
	get_footer();
?>