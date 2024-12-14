<?php
  /*
   *
   *
   *
   */
?>
<?php
  #wp builtin loads header.php
  get_header();
?> 

<?php #this creates the main header for the site. ?>
    <div class="pc-page-header">
      <h1 class="pc-page-title"><a class="pc-page-title" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name'); ?></a></h1>
    </div>
    
    <?php
      #wp builtin this loads pc-main-menu.php, through the template include system wordpress is using
      get_template_part("pc-menu", "dropdown-bar");
    ?>
    <?php #pc-page-area is a div container that holds the parts of the page ?>
    <div class="pc-page-area">
    <?php #pc-post-area is a div container that holds the posts ?>
      <div class="pc-post-area">
      <?php
        get_template_part("pc-page","404");
      ?>
      </div><!-- .pc-post-area-->
      <?php get_sidebar(); #wp builtin loads sidebar.php ?>
    </div><!-- .pc-page-area -->
<?php  get_footer(); #wp builtin loads footer.php ?>
