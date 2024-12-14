<?php
  /*
   *
   */
 
  #this includes pc-theme-options.php
  #pc-theme-options.php is where all the pixie core theme options are defined
  require_once ( get_template_directory() . '/pc-theme-options.php' );

  #this is where the teme sets up the menus
  function pc_register_menus() {
    register_nav_menus(
      array(
        #pc-page-menu is the main menu display by pc-page-menu.php
        'pc-page-menu' => _('PC Page Menu')
      )
    );
  }
  #this action calls pc_register_menus to register the theme menus
  add_action('init', 'pc_register_menus');

  #this walker is for the css menu bar I'm working on
  class PC_CSS_Menu_Walker extends Walker_Nav_Menu
  {
    #function start_lvl(&$output, $depth = 0, $args = array())
    #{
    #}
    #function end_lvl(&$output, $depth = 0, $args = array())
    #{
    #}
    function start_lvl(&$output, $depth)
    {
      $pc_menu_class = "pc-menu-sub";
      $output .= "<ul class='$pc_menu_class'>\n";
    }
    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
    {
      $object = $item->object;
      $type = $item->type;
      $title = $item->title;
      $description = $item->description;
      $permalink = $item->url;
      $pc_menu_type = "pc-menu";
      if($depth > 0){
        $pc_menu_type = "pc-menu-sub";
      }
      $output .="<li class='$pc_menu_type'><a class='$pc_menu_type' href='$item->url'>$item->title</a>";
    }

    function end_el(&$output, $depth = 0, $args = array(), $id = 0)
    {
      $output .= "</li>\n";
    }
  }
  
  #this function registers the sidebars for the page
  function pc_register_sidebars() {
    register_sidebar(
      array(
        'name' => _('PC Page Sidebar'),
        'id' => 'pc-page-sidebar',
        'description' => _('Page Sidebar for Pixie Core theme'),
      )
    );
  }
  #calls pc_register_sidebars to register the side bars for the theme 
  add_action( 'init', 'pc_register_sidebars' );
?>
