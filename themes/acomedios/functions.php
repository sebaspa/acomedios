<?php

if (!defined('VERSION')) {
  define('VERSION', '1.0.0');
}

function acomedios_setup()
{
  load_theme_textdomain('acomedios', get_template_directory() . '/languages');
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support(
    'html5',
    array(
      //'search-form',
      //'comment-form',
      //'comment-list',
      //'gallery',
      //'caption',
      //'style',
      //'script',
    )
  );

  register_nav_menus(
    array(
      'menu-1' => esc_html__('Primary', 'acomedios'),
    )
  );

}

add_action('after_setup_theme', 'acomedios_setup');


function acomedios_styles_scripts()
{

  wp_enqueue_style('acomedios-style', get_template_directory_uri() . '/css/app.css', array(), VERSION);
  wp_enqueue_script('acomedios-script', get_template_directory_uri() . '/js/app.js', array('jquery'), VERSION, true);
}

add_action('wp_enqueue_scripts', 'acomedios_styles_scripts');
