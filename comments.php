<div class="comment-section">
  <h1>
    <?php
    if(!have_comments()){
      echo 'Nie ma jeszcze żadnego komentarza';
    } else {
      get_comments_number(). " Comments"; 
    }?>
  </h1>
    <div class="comment-box">
      <ul>
        <?php 
          wp_list_comments();
        ?>
      </ul>
    </div>
</div>
<?php 
  if(comments_open()){
    comment_form(
      array(
        'class_form' => 'comment-form',
        'title_reply_before' => '<h2>',
        'title_reply_after' => '</h2>',
      )
      );
  }
?>