<?php
  /*
   *
   */
  #the menu was registered with functions.php
  #menu printed to page with this function
  $pc_page_menu = wp_nav_menu(
    array(
      #menu class sets what the menu class is printed as in the html output
      'menu_class' => 'pc-page-menu',
      #container class sets what the container surrounding the menu class will ouput as in html
      'container_class' => 'pc-page-menu',
      #this is where the theme will look for it
      'theme_location' => 'pc-page-menu',
      'walker' => new PC_CSS_Menu_Walker() 
    )
  );
?>
<!-- .pc_page_menu -->
