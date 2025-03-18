<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/HomePage-style.css">
    <link rel="stylesheet" href="./css/reset.css">
	<link rel="stylesheet" href="./css/footer-style.css">
	<link rel="stylesheet" href="./css/header-style.css">
    <script src="https://kit.fontawesome.com/8f5e4d2946.js" crossorigin="anonymous"></script>

    <title>Trang chủ</title>
</head>
<?php
	include('partials/header.php');

?>
<body>
    <div class="homepage homepage-container">
        <div class="container__content">
            <div class="homepage-content hot-news">
                <i class="fa-solid fa-star"></i>
                <h1>Tin nóng</h1>
                <hr>
            </div>
            <div class="homepage-content current-news">
                <i class="fa-solid fa-square-rss"></i>
                <h1>Tin mới</h1>
                <hr>
            </div>
            <div class="homepage-content thoi-su">
                <i class="fa-solid fa-globe"></i>
                <h1>Thời sự<h1>
                <hr>
            </div>
            <div class="homepage-content kinh-te">
                <i class="fa-solid fa-coins"></i>
                <h1>Kinh tế - tổng hợp<h1>
                <hr>
            </div>
 

            <div class="homepage-content van-hoa">
                <i class="fa-solid fa-earth-americas"></i>
                <h1>Văn hóa<h1>
                <hr>
            </div>
            <div class="homepage-content du-lich">
                <i class="fa-solid fa-plane"></i>
                <h1>Du lịch<h1>
                <hr>
            </div>

            
            

        </div>
    </div>
</body>
<?php
	include('partials/footer.php');
?>

