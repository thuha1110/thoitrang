<?php get_header(); ?>
<section class="hero">
  <div class="container">
    <div class="slider">
      <div class="slides">
        <div class="slide">
          <div>
            <h1>Phong cách nữ tính, hiện đại</h1>
            <p>Khám phá bộ sưu tập mới nhất với thiết kế tinh tế, dễ phối đồ.</p>
            <a class="btn" href="<?php echo esc_url(wc_get_page_permalink('shop')); ?>">Mua ngay</a>
          </div>
          <img src="https://images.unsplash.com/photo-1524504388940-b1c1722653e1?auto=format&fit=crop&w=1200&q=80" alt="" />
        </div>
        <div class="slide">
          <div>
            <h1>Thanh lịch mỗi ngày</h1>
            <p>Chất liệu mềm mại, form chuẩn, phù hợp công sở & dạo phố.</p>
            <a class="btn" href="<?php echo esc_url(wc_get_page_permalink('shop')); ?>">Xem bộ sưu tập</a>
          </div>
          <img src="https://images.unsplash.com/photo-1483985988355-763728e1935b?auto=format&fit=crop&w=1200&q=80" alt="" />
        </div>
        <div class="slide">
          <div>
            <h1>Ưu đãi mùa mới</h1>
            <p>Giảm giá đến 30% cho sản phẩm mới. Số lượng có hạn.</p>
            <a class="btn" href="<?php echo esc_url(wc_get_page_permalink('shop')); ?>">Mua ngay</a>
          </div>
          <img src="https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?auto=format&fit=crop&w=1200&q=80" alt="" />
        </div>
      </div>
      <div class="dots">
        <span class="dot"></span><span class="dot"></span><span class="dot"></span>
      </div>
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
        $link = get_term_link($cat);
        echo '<a class="card category-card" href="' . esc_url($link) . '">';
        echo '<h3>' . esc_html($cat->name) . '</h3>';
        echo '<span>Xem sản phẩm</span>';
        echo '</a>';
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
