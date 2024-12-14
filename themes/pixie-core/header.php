<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <?php wp_enqueue_style( 'style', get_stylesheet_uri() ); ?>
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
