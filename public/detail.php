<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>Tháp Bình Lâm</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" rel="stylesheet"/>
  <style>
    body {
      background-color: #f2f2f2;
      font-family: Arial, sans-serif;
    }
    .swiper {
      width: 100%;
      height: 450px;
      border-radius: 10px;
      overflow: hidden;
    }
    .swiper-slide img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
    .thumbs {
      margin-top: 10px;
    }
    .swiper-thumb img {
      border-radius: 5px;
      cursor: pointer;
      opacity: 0.7;
    }
    .swiper-thumb img:hover,
    .swiper-thumb.swiper-slide-thumb-active img {
      opacity: 1;
      border: 2px solid #007bff;
    }
  </style>
</head>
<body>
  <div class="container py-5">
    <h2 class="mb-4 text-center">Tháp Bình Lâm</h2>

    <!-- Swiper main image -->
    <div class="swiper mySwiper2 mb-3">
      <div class="swiper-wrapper">
        <?php
          $images = [
            "imgDanhlamthangcanh/honkho.jpg",
            "imgDanhlamthangcanh/honkho.jpg",
            "imgDanhlamthangcanh/honkho.jpg",
            "imgDanhlamthangcanh/honkho.jpg"
          ];
          foreach ($images as $img) {
            echo "<div class='swiper-slide'><img src='$img' alt='Tháp Bình Lâm'></div>";
          }
        ?>
      </div>
    </div>

    <!-- Swiper thumbnails -->
    <div class="swiper mySwiper thumbs">
      <div class="swiper-wrapper">
        <?php
          foreach ($images as $img) {
            echo "<div class='swiper-slide swiper-thumb'><img src='$img' height='80'></div>";
          }
        ?>
      </div>
    </div>

    <div class="mt-4">
      <h5>Giới thiệu</h5>
      <p>Tháp Bình Lâm là một di tích Chăm nổi bật tại Bình Định, mang kiến trúc cổ kính, được xây dựng từ thời vương quốc Champa. Đây là điểm đến hấp dẫn cho những ai yêu thích lịch sử và kiến trúc cổ.</p>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
  <script>
    const swiperThumbs = new Swiper(".mySwiper", {
      spaceBetween: 10,
      slidesPerView: 5,
      freeMode: true,
      watchSlidesProgress: true,
    });

    const swiperMain = new Swiper(".mySwiper2", {
      spaceBetween: 10,
      navigation: true,
      thumbs: {
        swiper: swiperThumbs,
      },
    });
  </script>
</body>
</html>