<?php get_header(); ?>
<section class="hero">
  <div class="container">
    <div class="hero-content">
      <h1>Phong cách nữ tính, hiện đại</h1>
      <p>Khám phá bộ sưu tập thời trang nữ mới nhất với thiết kế tinh tế, màu sắc nhẹ nhàng.</p>
      <a class="btn" href="<?php echo esc_url(wc_get_page_permalink('shop')); ?>">Mua ngay</a>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <h2>Danh mục nổi bật</h2>
    <div class="grid grid-3">
      <?php
      $categories = get_terms(['taxonomy' => 'product_cat', 'number' => 4, 'hide_empty' => false]);
      foreach ($categories as $cat) {
        echo '<div class="card"><h3>' . esc_html($cat->name) . '</h3></div>';
      }
      ?>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <h2>Sản phẩm nổi bật</h2>
    <?php echo do_shortcode('[products limit="6" columns="3" orderby="date" order="DESC"]'); ?>
  </div>
</section>
<?php get_footer(); ?>
