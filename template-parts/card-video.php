<?php 
  $video = get_field("video_embed");
?>
<div class="blog-post video-post">
  <div class="inner-post">
    <?php echo $video;?>
    <div class="post-content">
      <h2><a href="<?php the_permalink()?>"><?php the_title()?></a></h2>
      <p><?php the_excerpt()?></p>
      <ul class="post-tags">
        <li><a href="#"><i class="fa fa-comment"></i><?php comments_number()?></a></li>
        <li><a href="#"><i class="fa fa-calendar"></i><?php the_date()?></a></li>
      </ul>
    </div>
  </div>
</div>