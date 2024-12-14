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
      $pc_post_content = get_the_content(); 
      echo apply_filters('the_content', $pc_post_content);
      /*echo $pc_post_content;*/
    ?>
    </div><!-- .pc-post-entry -->
    <?php get_template_part("pc-post", "nav"); ?>
    <?php 
      if (comments_open()){
      comments_template();
      }
    ?>
  </div><!-- .pc-post-container -->
