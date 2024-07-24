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
    $script_data  = array(
      'pageTitle' => $page_title,
      'pageId'    => $page_id,
      'themeName' => $theme_name,
      'pageName'  => $pagename,
      'pageUrl'   => get_permalink(),
      'base_url'  => site_url(),
      'theme'     => get_template_directory_uri()
    );
?>
  <script>
    var script_data = <?= json_encode($script_data); ?>;
  </script>
  
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>