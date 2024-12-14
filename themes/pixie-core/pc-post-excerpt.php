<?php
  /*
   *
   */
?>
  <div class='pc-post-container'>
    <?php $pc_main_title = get_the_title(); ?>
    <h2 class="pc-post-title"><a href="<?php echo esc_url(get_permalink()) ?>" class="pc-post-title"><?php echo $pc_main_title; ?></a></h2>
    <div class="pc-post-entry">
    <?php 
      $pc_post_content = get_the_excerpt(); 
      echo $pc_post_content;
    ?>
    </div><!-- .pc-post-entry -->
  </div><!-- .pc-post-container -->
