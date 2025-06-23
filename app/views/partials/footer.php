<footer class="footer">
  <div class="footer-container">
    <div class="footer-content">
      <div class="footer-logo">
        <img src="/BinhDinhNews/public/images/logo.webp" alt="Cổng thông tin Bình Định" />
      </div>
      <div class="footer-info">
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
    </div>
  </div>
</footer>

<style>
  .footer {
    background-color: #007bff;
    color: #fff;
    font-family: "Segoe UI", sans-serif;
    padding: 20px;
    font-size: 20px;
    position: relative;
  }
  .footer .container {
    max-width: 1200px;
    margin: 0 auto;
  }

  .footer-content {
    display: flex; 
    align-items: flex-start;
    justify-content: space-between;
    gap: 30px;
  }

  .footer-logo {
    flex-shrink: 0;
    padding-right: 20px;
  }

  .footer-logo img {
    width: 250px;
    height: auto;
    display: block; 
  }

  .footer-info {
    flex-grow: 1;
    text-align: right;
  }

  .footer .footer-nav {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
    margin-bottom: 20px;
    font-weight: 500;
    justify-content: flex-end;
  }
  .footer .footer-nav a {
    color: #fff;
    text-decoration: none;
    transition: color 0.2s;
  }
  .footer .footer-nav a:hover {
    color: rgb(26, 75, 235);
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
    .footer-content {
      flex-direction: column;
      align-items: center; 
      text-align: center; 
    }

    .footer-logo {
      padding-right: 0;
      margin-bottom: 20px;
    }

    .footer-logo img {
      width: 150px;
    }

    .footer-info {
      text-align: center;
    }

    .footer .footer-nav {
      flex-direction: column;
      align-items: center;
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