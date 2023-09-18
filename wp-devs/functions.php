<?php

// Always prefix with wpdevs first to prevent the functions from getting confused with another theme, or with some of WordPress's core functions

// This function will load the stylesheets, scripts, and other assets
function wpdevs_load_scripts()
{
  wp_enqueue_style('wpdevs-style', get_stylesheet_uri(), array(), filemtime(get_template_directory() . '/style.css'), 'all');
  wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Bungee&family=Poppins:wght@400;700&display=swap', [], null, 'all');
  wp_enqueue_script('dropdown', get_template_directory_uri() . '/js/dropdown.js', [], '1.0.0', true);
} // TODO - change the version number for stylesheet back to 1.0.0 before going live

add_action("wp_enqueue_scripts", "wpdevs_load_scripts");

function wpdevs_config()
{
  // This function will add the menus to the theme
  register_nav_menus(
    array(
      'wp_devs_main_menu' => 'Main Menu',
      'wp_devs_footer_menu' => 'Footer Menu'
    )
  );

  // Enable Custom Headers support for the theme, in admin dashboard
  $args = array(
    'height' => 225,
    'width' => 1920
  );
  add_theme_support('custom-header', $args);

  // Enable custom thumbnails for posts 
  add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'wpdevs_config', 0);