<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>Eo Gió - Danh lam thắng cảnh Bình Định</title>
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
    <h2 class="text-center mb-4">Eo Gió</h2>

    <div class="swiper mySwiper2 mb-3">
      <div class="swiper-wrapper">
        <?php
          $images = [
            "imgDanhlamthangcanh/eogio.jpg",
            "imgDanhlamthangcanh/eogio.jpg",
            "imgDanhlamthangcanh/eogio.jpg",
            "imgDanhlamthangcanh/eogio.jpg",
            "imgDanhlamthangcanh/eogio.jpg",
            "imgDanhlamthangcanh/eogio.jpg",
            "imgDanhlamthangcanh/eogio.jpg",
            "imgDanhlamthangcanh/eogio.jpg",
            "imgDanhlamthangcanh/eogio.jpg",
            "imgDanhlamthangcanh/eogio.jpg",
            "imgDanhlamthangcanh/eogio.jpg",
            "imgDanhlamthangcanh/eogio.jpg"
          ];
          foreach ($images as $img) {
            echo "<div class='swiper-slide'><img src='$img' alt='Eo Gió'></div>";
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
    <p>Bán đảo Phương Mai, X. Nhơn Lý, TP. Quy Nhơn, tỉnh Bình Định</p>
  </div>

  <p>
    Cái tên Eo Gió đã được người dân nơi đây đặt từ khá lâu xuất phát từ vị trí địa lý của nó. Nhìn từ xa Eo Gió giống như 1 cái yên ngựa, nằm giữa hai mỏm núi cao kề bên biển, mặt khác nếu đứng từ trên cao nhìn xuống lại tựa như một cái phễu, vì thế Eo Gió luôn đón gió từ biển thổi vào với sức gió rất mạnh. Vào mùa đông, biển động dữ dội mang theo những cơn mưa và gió lớn, hơi lạnh của nước biển kèm theo những đợt sóng dâng cao sẽ bào mòn đá nơi đây, theo thời gian đã tạo nên những khe rãnh xẻ ngang đồi núi, hình thành các vách núi sừng sững. Chính những yếu tố thiên nhiên này đã tạo cho Eo Gió một vẻ đẹp hoang sơ và kỳ vĩ.
  </p>
  <p>
    Eo Gió Quy Nhơn là một trong những thắng cảnh tuyệt đẹp tại xứ Nẫu mà nếu bỏ lỡ chắc chắn bạn sẽ rất tiếc. Nằm cách trung tâm thành phố Quy Nhơn chỉ khoảng 20km, du khách có thể dễ dàng di chuyển đến Eo Gió bằng xe máy hoặc taxi mà không mất quá nhiều thời gian.
  </p>
  
  
  <div class="section-box">
    <h5>Bản đồ</h5>
    <div class="map-placeholder">Bản đồ</div>
  </div>

  
  <div class="section-box">
    <h5>Khu vực liên quan</h5>
    <p>Kỳ Co, Tịnh xá Ngọc Hoà, Khu dã ngoại Trung Lương,...</p>
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
