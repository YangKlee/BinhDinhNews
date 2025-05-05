<!DOCTYPE html>
<html lang=vi>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/rightmenu-style.css">

  <link rel="stylesheet" href="./css/category-style.css">
  <link rel="stylesheet" href="./css/reset.css">
  <link rel="stylesheet" href="./css/footer-style.css">
  <link rel="stylesheet" href="./css/header-style.css">
  <link rel="stylesheet" href="./css/rightmenu-style.css">
  <script src="https://kit.fontawesome.com/8f5e4d2946.js" crossorigin="anonymous"></script>
  <link rel="icon" href="./images/logo.webp" type="image/x-icon">
  <script src="./scripts/homePage.js"></script>
  <title>Tỉnh ủy</title>
</head>
<?php
    include('../app/views/partials/header.php');
?>

<body>
  <style>
    body {
      margin: 0;
      padding: 0;
    }

    .container-tinh-uy{
      display: grid;
      grid-template-columns: 5% 65% 30%;

    }

    .tinh-uy {
      max-width: 900px;
      margin: 0 auto;

    }

    .tinh-uy h1 {
      font-size: 16px;
      margin-left: 20px;
      text-decoration: underline;
    }

    .tinh-uy .container-item {
      display: grid;
      grid-template-columns: 200px 200px 200px 200px;
      gap: 20px;
      margin: 0 20px 20px 20px;
      margin-bottom: 50px;
    }

    .tinh-uy .container-item-1 {
      display: flex;
      justify-content: center;
      margin-bottom: 50px;
      gap: 50px;
    }

    .tinh-uy .container-item .item {
      display: block;
      text-align: center;
    }

    .tinh-uy .container-item .item img {
      max-width: 150px;
    }

    .tinh-uy .container-item .item label,
    b {
      font-size: 13px;
    }

    .tinh-uy .container-item-cuoi {
      display: flex;
      justify-content: flex-start;
      gap: 20px;
      margin-bottom: 20px;
    }
  </style>
  <div class="container-tinh-uy">
    <div class="container-left"></div>
    <div class="tinh-uy">
      <h1> Lãnh đạo Tỉnh ủy </h1>
      <div class="container-item container-item-1">
        <div class="item">
          <img src="images/imgChinhquyen/tinhUy/lanhdao/hoquocdung.jpg">
          <br>
          <label> ỦY VIÊN BCH TW ĐẢNG</label>
          <br>
          <label > Bí thư Tỉnh ủy, Chủ tịch HĐND tỉnh</label>
          <br>
          <b> HỒ QUỐC DŨNG </b>
        </div>
      </div>

      <div class="container-item container-item-1">
        <div class="item">
          <img src="images/imgChinhquyen/tinhUy/lanhdao/lekimtoan.jpg">
          <br>
          <label> PHÓ BÍ THƯ TT TỈNH ỦY</label>
          <br>
          <label > Trưởng đoàn ĐBQH hội tỉnh</label>
          <br>
          <b>LÊ KIM TOÀN</b>

        </div>
        <div class="item">
          <img src="images/imgChinhquyen/tinhUy/lanhdao/phamanhtuan.jpg">
          <br>
          <label> PHÓ BÍ THƯ TỈNH ỦY</label>
          <br>
          <label >Chủ tịch UBND tỉnh</label>
          <br>
          <b> PHẠM ANH TUẤN </b>
        </div>
      </div>



      <div class="tinh-uy">
        <h1> Ban thường vụ Tỉnh ủy </h1>
        <div class="container-item container-item-1">
          <div class="item">
            <img src="images/imgChinhquyen/tinhUy/thuongvu/hoquocdung.jpg">
            <br>
            <label> ỦY VIÊN BCH TW ĐẢNG</label>
            <br>
            <label > Bí thư Tỉnh ủy, Chủ tịch HĐND tỉnh</label>
            <br>
            <b> HỒ QUỐC DŨNG </b>
          </div>
        </div>


        <div class="container-item">
          <div class="item">
            <img src="images/imgChinhquyen/tinhUy/thuongvu/lekimtoan.jpg">
            <br>
            <label> PHÓ BÍ THƯ TT TỈNH ỦY</label>
            <br>
            <label > Trưởng đoàn ĐBQH hội tỉnh</label>
            <br>
            <b>LÊ KIM TOÀN</b>

          </div>

          <div class="item">
            <img src="images/imgChinhquyen/tinhUy/thuongvu/phamanhtuan.jpg">
            <br>
            <label> PHÓ BÍ THƯ TỈNH ỦY</label>
            <br>
            <label >Chủ tịch UBND tỉnh</label>
            <br>
            <b> PHẠM ANH TUẤN </b>
          </div>

          <div class="item">
            <img src="images/imgChinhquyen/tinhUy/thuongvu/nguyengio.jpg">
            <br>
            <label> ỦY VIÊN BTV TỈNH ỦY</label>
            <br>
            <b>NGUYỄN GIỜ</b>

          </div>

          <div class="item">
            <img src="images/imgChinhquyen/tinhUy/thuongvu/dangvinhson.jpg">
            <br>
            <label>ỦY VIÊN BTV TỈNH ỦY</label>
            <br>
            <label>Trưởng Ban Nội chính Tỉnh ủy</label>
            <br>
            <b>ĐẶNG VĨNH SƠN</b>
          </div>
        </div>



        <div class="container-item">
          <div class="item">
            <img src="images/imgChinhquyen/tinhUy/thuongvu/trancang.jpg">
            <br>
            <label>ỦY VIÊN BTV TỈNH ỦY</label>
            <br>
            <label >Chủ nhiệm Ủy ban kiểm tra Tỉnh ủy</label>
            <br>
            <b>TRẦN CANG</b>

          </div>

          <div class="item">
            <img src="images/imgChinhquyen/tinhUy/thuongvu/nguyenthiphongvu.jpg">
            <br>
            <label>ỦY VIÊN BTV TỈNH ỦY</label>
            <br>
            <label >Trưởng Ban Tuyên giáo và Dân vận Tỉnh ủy</label>
            <br>
            <b>NGUYỄN THỊ PHONG VŨ</b>



          </div>

          <div class="item">
            <img src="images/imgChinhquyen/tinhUy/thuongvu/nguyentuanthanh.jpg">
            <br>
            <label>ỦY VIÊN BTV TỈNH ỦY</label>
            <br>
            <label >Phó Chủ tịch TT UBND tỉnh</label>
            <br>
            <b>NGUYỄN TUẤN THANH </b>

          </div>

          <div class="item">
            <img src="images/imgChinhquyen/tinhUy/thuongvu/doanvanphi.jpg">
            <br>
            <label>ỦY VIÊN BTV TỈNH ỦY</label>
            <br>
            <label>Phó Chủ tịch TT HĐND tỉnh</label>
            <br>
            <b>ĐOÀN VĂN PHI</b>
          </div>
        </div>


        <div class="container-item">
          <div class="item">
            <img src="images/imgChinhquyen/tinhUy/thuongvu/voducnguyen.jpg">
            <br>
            <label>ỦY VIÊN BTV TỈNH ỦY</label>
            <br>
            <label >Giám đốc Công an tỉnh</label>
            <br>
            <b>VÕ ĐỨC NGUYỆN</b>

          </div>

          <div class="item">
            <img src="images/imgChinhquyen/tinhUy/thuongvu/doxuanhung.jpg">
            <br>
            <label>ỦY VIÊN BTV TỈNH ỦY</label>
            <br>
            <label >Chỉ huy trưởng BCH quân sự tỉnh.</label>
            <br>
            <b>ĐỖ XUÂN HÙNG</b>



          </div>

          <div class="item">
            <img src="images/imgChinhquyen/tinhUy/thuongvu/maiviettrung.jpg">
            <br>
            <label>ỦY VIÊN BTV TỈNH ỦY</label>
            <br>
            <label >Trưởng Ban Tổ chức Tỉnh ủy</label>
            <br>
            <b>MAI VIỆT TRUNG</b>

          </div>

          <div class="item">
            <img src="images/imgChinhquyen/tinhUy/thuongvu/nguyenvandung.jpg">
            <br>
            <label>ỦY VIÊN BTV TỈNH ỦY</label>
            <br>
            <label >Bí thư Thành ủy Quy Nhơn</label>
            <br>
            <b> NGUYỄN VĂN DŨNG</b>
          </div>

        </div>


        <div class="container-item">
          <div class="item">
            <img src="images/imgChinhquyen/tinhUy/thuongvu/nguyentuconghoang.jpg">
            <br>
            <label>ỦY VIÊN BTV TỈNH ỦY</label>
            <br>
            <label>ㅤPhó Chủ tịch UBND tỉnhㅤㅤ</label>
            <br>
            <label>ㅤTrưởng Ban Quản lý KKT tỉnhㅤ</label>
            <br>
            <b>NGUYỄN TỰ CÔNG HOÀNG</b>
          </div>
        </div>


      </div>

    </div>

        <div class="container-right">
            <?php
                include("../app/views/right/homepage.php");
            ?>
        </div>
  </div>
</body>
<?php
        include('../app/views/partials/footer.php');
?>

</html>
