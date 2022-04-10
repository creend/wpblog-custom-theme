<article class="blog-post image-post">
  <div class="inner-post">
    <img alt="" src="<?php the_post_thumbnail_url() ?>">
    <div class="post-content">
      <h2><a href="<?php echo get_permalink()?>"><?php the_title()?></a></h2>
      <p><?php echo the_excerpt()?></p>
      <ul class="post-tags">
        <li><a href="#"><i class="fa fa-comment"></i><?php comments_number()?></a></li>
        <li><a href="#"><i class="fa fa-calendar"></i><?php the_date()?></a></li>
      </ul>
    </div>
  </div>
</article>