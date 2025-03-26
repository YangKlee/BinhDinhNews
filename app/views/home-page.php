<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/HomePage-style.css">
    <link rel="stylesheet" href="./css/reset.css">
	<link rel="stylesheet" href="./css/footer-style.css">
	<link rel="stylesheet" href="./css/header-style.css">
    <link rel="stylesheet" href="./css/banner-style.css">
    <script src="https://kit.fontawesome.com/8f5e4d2946.js" crossorigin="anonymous"></script>
    <script src="./scripts/homePage.js"></script>
    <title>Trang chủ</title>
</head>
<?php
	include('partials/header.php');


?>
<body>
        <span>
            <?php
                  include('partials/banner-horizon.php');
                  //include('partials/banner-vetical.php');
            ?>
        </span>
    <div class="homepage homepage-container">

        <div class="container__content">
            <div class="homepage-content hot-news">
                <i class="fa-solid fa-star"></i>
                <h2 class="type-title">Tin nóng</h2>
                <hr class="hr_cat">
                
                <div class="hot-article-container">
                    <button class="btn slide-left" onclick="loadArtNext(false)"><i class="fa-solid fa-arrow-left"></i></button>
                    <article class="hot-article 0001"  onclick="showArticle('0001')">
                        <img src="../app/data/article/0001.jpg" alt="">
                        <h3>Kỳ họp thứ 22 (kỳ họp chuyên đề), HĐND tỉnh khóa XIII</h3>
                        <i>Thứ 6, 21/03/2025 | 15:45</i>
                    </article>
                    <article class="hot-article 0002"  onclick="showArticle('0002')">
                        <img src="../app/data/article/0002.jpg" alt="">
                        <h3>Khai mạc Liên hoan Truyền hình toàn quốc lần thứ 42</h3>
                        <i>Thứ 4, 19/03/2025 | 20:17    </i>
                    </article>
                    <article class="hot-article 0002"  onclick="showArticle('0003')">
                        <img src="../app/data/article/0003.jpg" alt="">
                        <h3>ViruSs xác nhận 'phụ tùng' để quên ở nhà anh là của J97 </h3>
                        <i>Thứ 4, 26/03/2025 | 20:17    </i>
                    </article>
                    <button class="btn slide-right" onclick="loadArtNext(true)"><i class="fa-solid fa-arrow-right"></i></button>
                </div>
                

            </div>
            <div class="homepage-content current-news">
                <i class="fa-solid fa-square-rss"></i>
                <h2 class="type-title" >Tin mới</h2>
                <hr class="hr_cat">
                <div class="current-news-container">
                    <article class="article-news 0001">    
                        <div class="container-news">
                            <div class="left">
                                <img src="" alt="">
                            </div>
                            <div class="right">
                                <h3>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Temporibus consectetur dolores minima provident culpa aliquid</h3>
                                <i>Time</i>
                            </div>
                        </div>
                        <hr class="hr_article">
                    </article>
                    <article class="article-news 0001">    
                        <div class="container-news">
                            <div class="left">
                                <img src="" alt="">
                            </div>
                            <div class="right">
                                <h3>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Temporibus consectetur dolores minima provident culpa aliquid</h3>
                                <i>Time</i>
                            </div>
                        </div>
                        <hr class="hr_article">
                    </article>
                    <article class="article-news 0001">    
                        <div class="container-news">
                            <div class="left">
                                <img src="" alt="">
                            </div>
                            <div class="right">
                                <h3>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Temporibus consectetur dolores minima provident culpa aliquid</h3>
                                <i>Time</i>
                            </div>
                        </div>
                        <hr class="hr_article">
                    </article>
                    <article class="article-news 0001">    
                        <div class="container-news">
                            <div class="left">
                                <img src="" alt="">
                            </div>
                            <div class="right">
                                <h3>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Temporibus consectetur dolores minima provident culpa aliquid</h3>
                                <i>Time</i>
                            </div>
                        </div>
                        <hr class="hr_article">
                    </article>
                    <article class="article-news 0001">    
                        <div class="container-news">
                            <div class="left">
                                <img src="" alt="">
                            </div>
                            <div class="right">
                                <h3>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Temporibus consectetur dolores minima provident culpa aliquid</h3>
                                <i>Time</i>
                            </div>
                        </div>
                        <hr class="hr_article">
                    </article>
                    <article class="article-news 0001">    
                        <div class="container-news">
                            <div class="left">
                                <img src="" alt="">
                            </div>
                            <div class="right">
                                <h3>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Temporibus consectetur dolores minima provident culpa aliquid</h3>
                                <i>Time</i>
                            </div>
                        </div>
                        <hr class="hr_article">
                    </article>
                </div>
            </div>
            <div class="homepage-content maps">
                <div class="map-title">
                    <h3>BẢN ĐỒ HÀNH CHÍNH</h3>
                </div>
                <img src="../public/images/bando.png" alt="">

            </div>
            <div class="homepage-content thoi-su">
                <i class="fa-solid fa-globe"></i>
                <h2 class="type-title" >Thời sự<h1>
                <hr class="hr_cat">
            </div>
            <div class="homepage-content kinh-te">
                <i class="fa-solid fa-coins"></i>
                <h2 class="type-title" >Kinh tế - tổng hợp<h1>
                <hr class="hr_cat">
            </div>
 

            <div class="homepage-content van-hoa">
                <i class="fa-solid fa-earth-americas"></i>
                <h2 class="type-title" >Văn hóa<h1>
                <hr class="hr_cat">
            </div>
            <div class="homepage-content du-lich">
                <i class="fa-solid fa-plane"></i>
                <h2 class="type-title">Du lịch<h1>
                <hr class="hr_cat">
            </div>

            
            

        </div>
    </div>
</body>
<?php
	include('partials/footer.php');
?>

