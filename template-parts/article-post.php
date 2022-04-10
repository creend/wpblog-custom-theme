<div id="content">
			<div class="inner-content">
				<div class="single-project">
					<div class="single-box">
						<div class="single-box-content">
							<div class="project-post-content">
								<img src="<?php the_post_thumbnail_url() ?>" style="margin:10px;"/>
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
							<div class="tags-box">
								<h1>Tagi: </h1>
								<ul>
									<?php the_tags('<li>','</li><li>', '</li>') ?>
								</ul>
							</div>
							<h3>Kategorie: </h3>
              <?php the_category()?>
						</div>
					</div>

				</div>
			</div>
		</div>