<?php

// Always prefix with wpdevs first to prevent the functions from getting confused with another theme, or with some of WordPress's core functions

// This function will load the stylesheets
function wpdevs_load_scripts()
{
  wp_enqueue_style('wpdevs-style', get_stylesheet_uri(), array(), filemtime(get_template_directory() . '/style.css'), 'all');
  wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Bungee&family=Poppins:wght@400;700&display=swap', [], null, 'all');
} // TODO - change the version number back to 1.0.0 before going live

add_action("wp_enqueue_scripts", "wpdevs_load_scripts");