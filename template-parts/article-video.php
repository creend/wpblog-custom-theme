<?php 
  $video = get_field("video_embed");
?>
<div id="content">
			<div class="inner-content">
				<div class="single-project">
					<div class="single-box">
						<div class="single-box-content">
							<div class="project-post-content">
                <?php echo $video?>
								<div class="project-text">
									<h1><?php the_title()?></h1>
									<?php 
                    the_content();
                  ?>
								</div>
								<?php 
									comments_template();
								?>
							</div>
						</div>
						<div class="sidebar">
							<div class="post-info">
								<h1>Post Info</h1>
								<ul>
									<li>
										<span><i class="fa fa-user"></i></span><a href="#"><?php the_author()?></a>
									</li>
									<li>
										<span><i class="fa fa-calendar"></i></span><a href="#"><?php the_date()?></a>
									</li>
									<li>
										<span><i class="fa fa-link"></i></span><a href="https://rps.itedya.com/">RPS GAME :OOO</a>
									</li>
								</ul>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>