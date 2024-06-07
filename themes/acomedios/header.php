<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <nav>
    <ul class="menu">
      <li class="logo"><a href="#">Creative Mind Agency</a></li>
      <li class="item"><a href="#">Home</a></li>
      <li class="item"><a href="#">About</a></li>
      <li class="item has-submenu"><a tabindex="0">Services</a></li>
      <li class="item has-submenu"><a tabindex="0">Plans</a></li>
      <li class="item"><a href="#">Blog</a></li>
      <li class="item"><a href="#">Contact</a></li>
      <li class="item button"><a href="#">Log In</a></li>
      <li class="item button secondary"><a href="#">Sign Up</a></li>
      <li class="toggle"><a href="#"><i class="fas fa-bars"></i></a></li>
    </ul>
</nav>