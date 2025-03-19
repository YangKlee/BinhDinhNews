<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/HomePage-style.css">
    <link rel="stylesheet" href="./css/reset.css">
	<link rel="stylesheet" href="./css/footer-style.css">
	<link rel="stylesheet" href="./css/header-style.css">
    <script src="https://kit.fontawesome.com/8f5e4d2946.js" crossorigin="anonymous"></script>
    <script src="./scripts/homePage.js"></script>
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
                <h1 class="type-title">Tin nóng</h1>
                <hr>
                <article class="hot-article" onclick="showArticle('1702')">
                    <img src="https://cdn2.tuoitre.vn/zoom/480_300/471584752817336320/2025/1/20/edit-46980599211551147528521984309402575554985839n-1733889662255711833361-13-0-435-675-crop-17373780204891431921172.jpeg" alt="">
                    <h1>Jack - J97: Từ ngôi sao vụt sáng đến ‘ngụp lặn’ trong scandal</h1>
                </article>
            </div>
            <div class="homepage-content current-news">
                <i class="fa-solid fa-square-rss"></i>
                <h1 class="type-title" >Tin mới</h1>
                <hr>
            </div>
            <div class="homepage-content thoi-su">
                <i class="fa-solid fa-globe"></i>
                <h1 class="type-title" >Thời sự<h1>
                <hr>
            </div>
            <div class="homepage-content kinh-te">
                <i class="fa-solid fa-coins"></i>
                <h1 class="type-title" >Kinh tế - tổng hợp<h1>
                <hr>
            </div>
 

            <div class="homepage-content van-hoa">
                <i class="fa-solid fa-earth-americas"></i>
                <h1 class="type-title" >Văn hóa<h1>
                <hr>
            </div>
            <div class="homepage-content du-lich">
                <i class="fa-solid fa-plane"></i>
                <h1 class="type-title">Du lịch<h1>
                <hr>
            </div>

            
            

        </div>
    </div>
</body>
<?php
	include('partials/footer.php');
?>

