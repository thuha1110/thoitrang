<?php

function thoitrang_abc_setup() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('woocommerce');
  register_nav_menus([
    'primary' => __('Primary Menu', 'thoitrang-abc'),
  ]);
}
add_action('after_setup_theme', 'thoitrang_abc_setup');

function thoitrang_abc_assets() {
  wp_enqueue_style('thoitrang-abc-style', get_stylesheet_uri(), [], '1.0.0');
}
add_action('wp_enqueue_scripts', 'thoitrang_abc_assets');

function thoitrang_abc_logo() {
  $logo_path = get_template_directory_uri() . '/assets/logo.svg';
  echo '<img src="' . esc_url($logo_path) . '" alt="Thời trang ABC" width="36" height="36" />';
}
