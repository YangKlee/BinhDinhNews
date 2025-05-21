<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>Bảo tàng Quang Trung - Danh lam thắng cảnh Bình Định</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" rel="stylesheet"/>

  <style>
  body {
    background-color: #f2f2f2;
    font-family: Arial, sans-serif;
  }

  h2 {
    font-weight: bold;
  }

  .swiper {
  width: 100%;
  border-radius: 10px;
  overflow: hidden;
}

.mySwiper2 .swiper-slide img {
  width: 100%;
  height: auto;
  object-fit: contain;
  background-color: #000;
  border-radius: 10px;
}


.thumbs {
  margin-top: 15px;
}
.mySwiper .swiper-wrapper {
  gap: 6px;
  padding-right: 0 !important;
}

.mySwiper .swiper-slide {
  width: auto !important;
  margin-right: 4px;
}

.swiper-thumb img {
  border-radius: 8px;
  cursor: pointer;
  opacity: 0.7;
  border: 2px solid transparent;
  transition: opacity 0.3s ease, border-color 0.3s ease;
}

.swiper-thumb.swiper-slide-thumb-active img,
.swiper-thumb img:hover {
  opacity: 1;
  border-color: #007bff;
}


  .description {
    background-color: white;
    padding: 24px;
    border-radius: 12px;
    margin-top: 30px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
  }

  .description h5 {
    margin-top: 0;
    margin-bottom: 12px;
    font-size: 20px;
    font-weight: bold;
  }

  .description p {
    margin-bottom: 16px;
    line-height: 1.6;
  }

  .section-box {
    margin-top: 24px;
    margin-bottom: 24px;
  }

  .section-box h5 {
    font-size: 18px;
    margin-bottom: 8px;
    font-weight: bold;
  }

  .section-box p {
    margin: 0;
    line-height: 1.5;
  }
</style>

</head>

<body>
  <div class="container py-5">
    <h2 class="text-center mb-4">Bảo tàng Quang Trung</h2>

    <div class="swiper mySwiper2 mb-3">
      <div class="swiper-wrapper">
        <?php
          $images = [
            "imgDanhlamthangcanh/baotang.jpg",
            "imgDanhlamthangcanh/baotang.jpg",
            "imgDanhlamthangcanh/baotang.jpg",
            "imgDanhlamthangcanh/baotang.jpg",
            "imgDanhlamthangcanh/baotang.jpg",
            "imgDanhlamthangcanh/baotang.jpg",
            "imgDanhlamthangcanh/baotang.jpg",
            "imgDanhlamthangcanh/baotang.jpg",
            "imgDanhlamthangcanh/baotang.jpg",
            "imgDanhlamthangcanh/baotang.jpg",
            "imgDanhlamthangcanh/baotang.jpg",
            "imgDanhlamthangcanh/baotang.jpg"
          ];
          foreach ($images as $img) {
            echo "<div class='swiper-slide'><img src='$img' alt='Bảo tàng Quang Trung'></div>";
          }
        ?>
      </div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
    </div>

    <div class="swiper mySwiper thumbs">
      <div class="swiper-wrapper">
        <?php
          foreach ($images as $img) {
            echo "<div class='swiper-slide swiper-thumb'><img src='$img' height='80'></div>";
          }
        ?>
      </div>
    </div>

    <div class="description">
  <h5>Giới thiệu</h5>

   
   <div class="section-box">
    <h5>Địa chỉ:</h5>
    <p>Nằm ở Khối 1, thị trấn Phú Phong, huyện Tây Sơn, tỉnh Bình Định</p>
  </div>

  <p>
    Bảo tàng Quang Trung là một bảo tàng nằm đối diện sông Côn, bao quanh bởi đường tỉnh lộ 636, Quốc lộ 19B, đường Ngọc Hân Công chúa, đường Nguyễn Nhạc, đường Đống Đa. Bảo tàng được xây dựng trên nền nhà cũ của anh em Nhà Tây Sơn, vùng đất quê hương của Tây Sơn tam kiệt, vị trí bao quanh Đền thờ Tây Sơn tam kiệt hay Điện Tây Sơn. Ngày nay, tên của bảo tàng được đặt theo Tây Sơn Thái Tổ, Hoàng đế Quang Trung.
  </p>
  <p>
    Bảo tàng Quang Trung tập trung thờ và tưởng niệm anh hùng áo vải Nguyễn Huệ, lưu giữ những hiện vật lịch sử liên quan đến Cuộc khởi nghĩa Tây Sơn, dấu tích ba anh em Nhà Tây Sơn: Nguyễn Huệ, Nguyễn Nhạc, Nguyễn Lữ
  </p>
  
  
  <div class="section-box">
    <h5>Bản đồ</h5>
    <div class="map-placeholder">Bản đồ</div>
  </div>

  
  <div class="section-box">
    <h5>Khu vực liên quan</h5>
    <p>Hầm Hô, Tháp bánh Ít, Đầm Trà Ổ,...</p>
  </div>
</div>


 
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
  <script>
    const swiperThumbs = new Swiper(".mySwiper", {
      spaceBetween: 10,
      slidesPerView: 'auto',  
      freeMode: true,
      watchSlidesProgress: true,
    });

    const swiperMain = new Swiper(".mySwiper2", {
      spaceBetween: 10,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev"
      },
      thumbs: {
        swiper: swiperThumbs,
      },
    });
  </script>
</body>
</html>
