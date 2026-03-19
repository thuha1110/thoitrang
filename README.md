# Thời trang ABC – WordPress package

## Thành phần
- `wordpress/` : WordPress core (Tiếng Việt) + theme `thoitrang-abc` + WooCommerce
- `abc-fashion.sql` : Database mẫu (sản phẩm, trang, menu, cài đặt)

## Tài khoản admin demo
- **user:** `admin_demo`
- **pass:** `Admin@12345`

## Hướng dẫn cài lên hosting cPanel
1) Upload thư mục `wordpress/` lên `public_html/` (hoặc thư mục domain/subdomain).
2) Tạo database + user trong cPanel.
3) Sửa file `wp-config.php`:
   - `DB_NAME`, `DB_USER`, `DB_PASSWORD`
4) Import file `abc-fashion.sql` vào database (phpMyAdmin).
5) Đăng nhập `/wp-admin` với tài khoản admin demo.

## Sau khi import (bắt buộc)
- Vào **Cài đặt → Tổng quan**: chỉnh lại URL theo domain thật.
- Nếu đổi domain, chạy Search/Replace (plugin Better Search Replace) để cập nhật URL.

## Ghi chú
- Dữ liệu sản phẩm mẫu có 12 sản phẩm, danh mục: Quần, Áo, Váy/đầm, Chân váy.
- Theme có hotline, email, chat Zalo/Facebook theo yêu cầu.
