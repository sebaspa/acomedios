<?php

if (!defined('VERSION')) {
  define('VERSION', '1.0.0');
}

function gg_gfonts_prefetch() {
  echo '<meta name="viewport" content="width=device-width, initial-scale=1">'."\r\n";
  echo '<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>'."\r\n";
  echo '<link rel="preconnect" href="https://fonts.googleapis.com/" crossorigin>'."\r\n";
}
add_action('wp_head', 'gg_gfonts_prefetch',1);

function acomedios_setup()
{
  load_theme_textdomain('acomedios', get_template_directory() . '/languages');
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );

  register_nav_menus(
    array(
      'menu-1' => esc_html__('Primary', 'acomedios'),
    )
  );

}

add_action('after_setup_theme', 'acomedios_setup');


function acomedios_styles_scripts()
{
  wp_enqueue_style('add_google_fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap', false );
  wp_enqueue_style('swiper-style', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css');
  wp_enqueue_style('fontawesome-style', get_template_directory_uri() . '/assets/fontawesome/css/all.min.css');
  //wp_enqueue_style('acomedios-style', get_template_directory_uri() . '/css/app.css', array(), VERSION);
  wp_enqueue_style('acomedios-style', get_template_directory_uri() . '/css/styles.css', array(), VERSION);
  wp_enqueue_script('swiper-script', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), '11.1.4' , true);
  wp_enqueue_script('fontawesome-script', get_template_directory_uri() . '/assets/fontawesome/js/all.min.js', array('jquery'), '6.5.2' , true);
  wp_enqueue_script('acomedios-script', get_template_directory_uri() . '/js/app.js', array('jquery', 'swiper-script'), VERSION, true);
}

add_action('wp_enqueue_scripts', 'acomedios_styles_scripts');
