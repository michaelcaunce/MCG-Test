<?php 

function mcg_files() {
  wp_enqueue_style('font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css');
  wp_enqueue_style('main_styles', get_stylesheet_uri());
}

// Created function to add new features
function mcg_features() {
    // relevant titles to the browsers tab
    add_theme_support('title-tag');
}

// Add Wordpress actions
add_action('wp_enqueue_scripts', 'mcg_files');
add_action('after_setup_theme', 'mcg_features');