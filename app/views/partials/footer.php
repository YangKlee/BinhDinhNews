<footer class="footer">
  <div class="container">
    <div class="footer-nav">
      <a href="/BinhDinhNews/public/index.php">Trang chủ</a><span>|</span>
      <a href="https://binhdinh.gov.vn/tin-tuc">Tin tức</a><span>|</span>
      <a href="/BinhDinhNews/public/pages/site/chinhquyen/chinhquyenindex.php">Chính quyền</a><span>|</span>
      <a href="/BinhDinhNews/public/pages/site/dulichc/dulich_home.php">Du lịch</a><span>|</span>
      <a href="https://binhdinh.gov.vn/van-ban-chi-dao-dieu-hanh">Công dân</a><span>|</span>
      <a href="#">Tra cứu</a>
    </div>

    <div class="footer-legal">
     <p><strong>© CỔNG THÔNG TIN BÌNH ĐỊNH</strong></p>
      <P>Địa chỉ: 123 Đường ABC, TP. Quy Nhơn, Bình Định</P>
      <p>Giấy phép số 113 do Sở Thông tin và Truyền thông Bình Định cấp ngày 16/05/2025</p>
      <p>Trưởng Ban biên tập: Ông Trần Thanh Cường - Chánh Văn phòng UBND tỉnh</p>
      <p>Quản lý kỹ thuật: Trung tâm Phục vụ Hành chính công tỉnh Bình Định</p>
      <p>Điện thoại: (0256).1234567 – 12345678 - Fax: (0256).1234567 - Email: banbientap@binhdinhnews.vn</p>
      <p>Số điện thoại đường dây nóng: 0256 1234567</p>
      <p>©Bản quyền thuộc Cổng Thông tin Bình Định. Khi trích dẫn thông tin từ nguồn này, ghi rõ "www.binhdinhnews.vn".</p>
    </div>
  </div>
</footer>

<style>
      .footer {
    background: #007bff url('/BinhDinhNews/public/images/logo.webp') no-repeat center left 120px;
    background-size: 320px;
    color: #fff;
    font-family: "Segoe UI", sans-serif;
    padding: 40px 20px 40px 600px;
    font-size: 20px;
    position: relative;
  }
  .footer .container {
    max-width: 1200px;
    margin: 0 auto;
  }
  .footer .footer-nav {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
    margin-bottom: 20px;
    font-weight: 500;
  }
  .footer .footer-nav a {
    color: #fff;
    text-decoration: none;
    transition: color 0.2s;
  }
  .footer .footer-nav a:hover {
    color:rgb(26, 75, 235);
    text-decoration: underline;
  }
  .footer .footer-nav span {
    color: rgba(255, 255, 255, 0.5);
  }
  .footer .footer-legal {
    font-size: 13px;
    line-height: 1.6;
  }
  .footer .footer-legal p {
    margin: 0 0 5px;
  }
  @media (max-width: 768px) {
    .footer {
      background-position: top center;
      padding-left: 20px;
      padding-top: 160px;
      background-size: 100px;
    }
    .footer .footer-nav {
    flex-direction: column;
    align-items: flex-start;
    gap: 4px;
    font-size: 16px;
  }

  .footer .footer-nav a {
    display: inline-block;
    padding: 6px 0;
  }

  .footer .footer-nav span {
    display: none;
  }
  }
</style>