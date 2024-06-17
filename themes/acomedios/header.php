<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <?php wp_head(); ?>
  <?php 
    $post = $wp_query->get_queried_object();
    $pagename = $post->post_name;
  ?>
  
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>