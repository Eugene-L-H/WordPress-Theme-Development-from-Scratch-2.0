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
    'width' => 1920,
  );
  add_theme_support('custom-header', $args);

  // Enable custom thumbnails for posts 
  add_theme_support('post-thumbnails');

  // Enable custom logo support for the theme, in admin dashboard
  add_theme_support(
    'custom-logo',
    array(
      'height' => 110,
      'width' => 200
    )
  );
}

add_action('after_setup_theme', 'wpdevs_config', 0);

// This function will add the blog sidebar to the theme
function wpdevs_sidebars()
{
  register_sidebar(
    array(
      'name' => 'Blog Sidebar',
      'id' => 'sidebar-blog',
      'description' => 'This is the blog sidebar. You can add your widgets here.',
      'before_widget' => '<div class="widget-wrapper">',
      'after_widget' => '</div>',
      'before_title' => '<h4 class="widget-title">',
      'after_title' => '</h4>'
    )
  );

  // Add in the services widget areas, to be used on the homepage
  register_sidebar(
    array(
      'name' => 'Service 1',
      'id' => 'services-1',
      'description' => 'First Services Area.',
      'before_widget' => '<div class="widget-wrapper">',
      'after_widget' => '</div>',
      'before_title' => '<h4 class="widget-title">',
      'after_title' => '</h4>'
    )
  );
  register_sidebar(
    array(
      'name' => 'Service 2',
      'id' => 'services-2',
      'description' => 'Second Services Area.',
      'before_widget' => '<div class="widget-wrapper">',
      'after_widget' => '</div>',
      'before_title' => '<h4 class="widget-title">',
      'after_title' => '</h4>'
    )
  );
  register_sidebar(
    array(
      'name' => 'Service 3',
      'id' => 'services-3',
      'description' => 'Third Services Area.',
      'before_widget' => '<div class="widget-wrapper">',
      'after_widget' => '</div>',
      'before_title' => '<h4 class="widget-title">',
      'after_title' => '</h4>'
    )
  );
}
add_action('widgets_init', 'wpdevs_sidebars', 0);