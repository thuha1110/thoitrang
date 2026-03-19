<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header>
  <div class="topbar">
    <div class="container">
      <div>Hotline: 0936020575</div>
      <div>Email: lienhe@inet.vn</div>
    </div>
  </div>
  <div class="container navbar">
    <a class="logo" href="<?php echo esc_url(home_url('/')); ?>">
      <?php thoitrang_abc_logo(); ?>
      <span>Thời trang ABC</span>
    </a>
    <nav class="menu">
      <?php
      wp_nav_menu([
        'theme_location' => 'primary',
        'container' => false,
        'items_wrap' => '%3$s',
      ]);
      ?>
    </nav>
  </div>
</header>
