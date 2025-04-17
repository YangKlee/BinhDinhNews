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
	include('../app/views/partials/header.php');


?>
<body>
    <div class="main-container">
        <div class="container-left"></div>
        <div class="container-mid">
            <span>
                    <?php
                        //include('../app/views/partials/banner-horizon.php');
                        //include('partials/banner-vetical.php');
                    ?>
                </span>
            <div class="homepage homepage-container">

                <div class="container__content">
                    <div class="homepage-row-1">
                    <div class="homepage-content hot-news">
                        <i class="fa-solid fa-star"></i>
                        <h2 class="type-title">Tin nóng</h2>
                        <hr class="hr_cat">
                        
                        <div class="hot-article-container" id="slide-hot-news">
                            <button class="btn slide-left" onclick="loadArtNext(false);clearHotNewsTimer()"><i class="fa-solid fa-arrow-left"></i></button>
                            <?php
                                    require_once "../app/model/article.php";
                                    require_once "../app/model/articleDAO.php";
                                    $conn = new articleDAO();
                                    $artArray = $conn->getListArticle("Select * from article");
                                    if (mysqli_num_rows($artArray) > 0)
                                    {
                                        while($row = mysqli_fetch_assoc($artArray))
                                        {
                                            echo '  <a href="./article.php?id='.$row['ID_Art'].'"  class="hot-article" id="art-hot-news">
                                                <article>
                                                    <img src="./images/article/'.$row['ImageTitle'].'" alt="">
                                                    <h3> '.$row['Title'].'
                                                    </h3>
                                                    <i>'.$row['Time_modify'].'</i>
                                                </article>
                                            </a>';
                                        }
                                    }

                                    
                                ?>

                            <button class="btn slide-right" onclick="loadArtNext(true); clearHotNewsTimer()"><i class="fa-solid fa-arrow-right"></i></button>
                        </div>
                        

                    </div>
                    <div class="homepage-content current-news">
                        <i class="fa-solid fa-square-rss"></i>
                        <h2 class="type-title" >Tin mới</h2>
                        <hr class="hr_cat">
                        <div class="current-news-container">
                            <a class="article-news">
                                <article>    
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
                            </a>
                            <a class="article-news">
                                <article>    
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
                            </a>
                            <a class="article-news">
                                <article>    
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
                            </a>
                            <a class="article-news">
                                <article>    
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
                            </a>
                            <a class="article-news">
                                <article>    
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
                            </a>
                            <a class="article-news">
                                <article>    
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
                            </a>

                        </div>
                    </div>
                    </div>
                    <div class="homepage-row-2">
                        <div class="homepage-content thoi-su">
                            <div class="thoisu-head-container">
                                <div class="thoisu-title-container">
                                    <i  class="fa-solid fa-globe"></i>
                                    <h2 class="type-title" >Thời sự<h2>
                                </div>
                                <div class="thoisu-button-container">
                                    <button onclick="loadArtThoiSuNext(false);clearHotNewsTimer()" class="left-btn"><i class="fa-solid fa-arrow-left"></i></button>
                                    <button onclick="loadArtThoiSuNext(true);clearHotNewsTimer()"class="right-btn"><i class="fa-solid fa-arrow-right"></i></button>
                                </div>
                                
                            </div>
                            <hr class="hr_cat">
                            <div class="article-thoisu-container">
                            <div class="thoisu-wrapper" id="thoisu-wrapper">
                                    <?php
                                        for($i = 6; $i <= 10; $i++)
                                        {
                                            echo '                                <a href="" class="thoisu-article clone">
                                                <img src=".\images\article\3.jpg" alt="ảnh">
                                                <p>Tiêu đề bài báo '.$i.'</p> 
                                                </a>';
                                        }
                                        for($i = 1; $i <= 10; $i++)
                                        {
                                            echo '                                <a href="" class="thoisu-article">
                                                <img src=".\images\article\3.jpg" alt="ảnh">
                                                <p>Tiêu đề bài báo '.$i.'</p> 
                                                </a>';
                                        }
                                        for($i = 1; $i <= 4; $i++)
                                        {
                                            echo '                                <a href="" class="thoisu-article clone">
                                                <img src=".\images\article\3.jpg" alt="ảnh">
                                                <p>Tiêu đề bài báo '.$i.'</p> 
                                                </a>';
                                        }
                                    ?>
                                    <script>
                                        const dsThoiSu = document.querySelector("thoisu-wrapper");
                                        let start, isclick;
                                        dsThoiSu.addEventListener('mousedown', function (e){
                                            isclick = true;
                                            
                                        })
                                        
                                    </script>
                            </div>
                            </div>
                        </div>

                    </div>
                    <div class="homepage-row-3">
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
                    </div>
                    <div class="homepage-row-4">
                        <div class="homepage-content du-lich">
                            <i class="fa-solid fa-plane"></i>
                            <h2 class="type-title">Du lịch<h1>
                            <hr class="hr_cat">
                        </div>
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

