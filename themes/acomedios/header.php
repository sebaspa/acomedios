<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <link rel="apple-touch-icon" sizes="180x180" href="<?= get_template_directory_uri(); ?>/images/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?= get_template_directory_uri(); ?>/images/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?= get_template_directory_uri(); ?>/images/favicon/favicon-16x16.png">
  <link rel="manifest" href="<?= get_template_directory_uri(); ?>/images/favicon//site.webmanifest">
  <?php wp_head(); ?>
  <?php 
    $post = $wp_query->get_queried_object();
    $pagename = $post->post_name;
  ?>
  
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>