<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>Hòn Khô - Danh lam thắng cảnh Bình Định</title>
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
    <h2 class="text-center mb-4">Hòn Khô</h2>

    <div class="swiper mySwiper2 mb-3">
      <div class="swiper-wrapper">
        <?php
          $images = [
            "imgDanhlamthangcanh/honkho.jpg",
            "imgDanhlamthangcanh/honkho.jpg",
            "imgDanhlamthangcanh/honkho.jpg",
            "imgDanhlamthangcanh/honkho.jpg",
            "imgDanhlamthangcanh/honkho.jpg",
            "imgDanhlamthangcanh/honkho.jpg",
            "imgDanhlamthangcanh/honkho.jpg",
            "imgDanhlamthangcanh/honkho.jpg",
            "imgDanhlamthangcanh/honkho.jpg",
            "imgDanhlamthangcanh/honkho.jpg",
            "imgDanhlamthangcanh/honkho.jpg",
            "imgDanhlamthangcanh/honkho.jpg"
          ];
          foreach ($images as $img) {
            echo "<div class='swiper-slide'><img src='$img' alt='Hòn Khô'></div>";
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
    <p>X. Nhơn Hải, TP. Quy Nhơn, T. Bình Định</p>
  </div>

  <p>
  Hòn Khô Quy Nhơn hay còn được biết đến với tên gọi khác là Cù lao Hòn Khô sở hữu một vẻ đẹp xanh mát, tự do và tươi mới do nơi đây vẫn còn là một hòn đảo hoang sơ, nằm cách đất liền khoảng từ 10-15 phút lái cano; được bao bọc xung quanh bốn bề là nước biển trong xanh. Điểm đặc biệt ở Hòn Khô chính là các rạn san hô xinh đẹp phát triển và trải rộng khắp, cùng với làn nước biển xanh trong thì chỉ gần ngồi trên thuyền thôi thì bạn cũng đã có thể nhìn rõ thấy đáy biển và thu trọn trong tầm mắt cả một vùng đất dưới biển được trang trí bởi vô vàn rạn san hô đung đưa trong làn nước. Đây quả là một trải nghiệm tuyệt vời hiếm nơi nào có được.

  </p>
  <p>
  Được biết, Hòn Khô nằm cách trung tâm thành phố Quy Nhơn khoảng 16km và thuộc quần thể 32 hòn đảo gần bờ của tỉnh Bình Định và tọa lạc tại địa phận thôn Hải Đông, nơi có làng chài Nhơn Hải xinh đẹp. Tuy được gọi là Hòn Khô nhưng thắng cảnh nơi đây không hề khô khan mà trải rộng màu xanh của trời và màu xanh của nước biển tạo nên một khung cảnh tràn ngập sức sống và vô cùng nên thơ với những nét đặc trưng riêng do tạo hóa ban tặng.
  </p>
  
  
  <div class="section-box">
    <h5>Bản đồ</h5>
    <div class="map-placeholder">Bản đồ</div>
  </div>

  
  <div class="section-box">
    <h5>Khu vực liên quan</h5>
    <p>Làng chài Nhơn Hải, Rạn san hô Hòn Khô, Chùa Hương Mai,...</p>
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
