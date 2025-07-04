<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="./css/html.css"> -->
    <link rel="stylesheet" href="./css/HomePage-style.css">
    <link rel="stylesheet" href="./css/rightmenu-style.css">
    <link rel="stylesheet" href="./css/reset.css">
	<!-- <link rel="stylesheet" href="./css/footer-style.css"> -->
	<link rel="stylesheet" href="./css/header-style.css">
    <link rel="stylesheet" href="./css/reponsitive/header.css">
    <link rel="stylesheet" href="./css/reponsitive/main.css">
    <link rel="stylesheet" href="./css/reponsitive/homepage.css">
    <link rel="stylesheet" href="./css/banner-style.css">
    <script src="https://kit.fontawesome.com/8f5e4d2946.js" crossorigin="anonymous"></script>
    <link rel="icon" href="./images/logo.webp" type="image/x-icon">
    <script src="./scripts/homePage.js"></script>
    <title>Trang chủ</title>
</head>
<?php
	include('../app/views/partials/header.php');
   
?>

<body>
    <script>
        document.querySelector("nav #f1").classList.add('active');
    </script>
    <div class="main-container">
        <div class="container-left"></div>
        <div class="container-mid">
            <div class="homepage homepage-container">
                <div class="container__content">
                    <div class="homepage-row-1">
                    <div class="homepage-content hot-news">
                        <div class="hot-article-container" id="slide-hot-news">
                            <button class="btn slide-left" onclick="loadArtNext(false, true);clearHotNewsTimer()"><i class="fa-solid fa-arrow-left"></i></button>
                            <div class="hot-article-warpper">
                                <div class="hot-article-slide">
                                            <?php
                                // import class xây dựng sẵn
                                require_once("../app/model/articleDAO.php");
                                $DAOArticle = new articleDAO();

                                $sql = "SELECT ArticleID,Title, Time_modify, mainimage from article\n"
                                . "where ArticleStatus = 1\n"
                                . "ORDER BY Time_modify DESC\n"
                                . "LIMIT 5;";
                                // lấy kiết quả result của hàm trả về
                                $result = $DAOArticle->getListArticleQuery($sql);   
                                // duyệt từng hàng  
                                //Trả về 1 dòng dữ liệu trong $row dưới dạng 1 mảng các giá trị
                                //MYSQL_ASSOC: các giá trị trong mảng trả về có thể truy cập qua $key là tên của các trường trong "bảng".
                                // clone dòng cuối
                                $result_clone = $DAOArticle->getListArticleQuery("SELECT ArticleID,Title, Time_modify, mainimage from article\n"
                                                                                        . "where ArticleStatus = 1\n"
                                                                                        . "ORDER BY Time_modify DESC\n"
                                                                                        . "LIMIT 1 OFFSET 4;");
                                $row = mysqli_fetch_array($result_clone, MYSQLI_ASSOC);
                                    echo '  <a href="./article.php?id='.$row['ArticleID'].'"  class="hot-article clone" id="art-hot-news">
                                        <article>
                                            <img src="./images/upload/'.$row['ArticleID'].'/'.$row['mainimage'].'" alt="">
                                            <h3> '.$row['Title'].'
                                            </h3>
                                            <i class="time-label">'.$row['Time_modify'].'</i>
                                        </article>
                                    </a>';
                                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                                    // áp giá trị vào template
                                        echo '  <a href="./article.php?id='.$row['ArticleID'].'"  class="hot-article" id="art-hot-news">
                                        <article>
                                            <img src="./images/upload/'.$row['ArticleID'].'/'.$row['mainimage'].'" alt="">
                                            <h3> '.$row['Title'].'
                                            </h3>
                                            <i class="time-label">'.$row['Time_modify'].'</i>
                                        </article>
                                    </a>';
                                }    
                                // clone dòng đầu
                                $result_clone = $DAOArticle->getListArticleQuery("SELECT ArticleID,Title, Time_modify, mainimage from article\n"
                                                                                        . "where ArticleStatus = 1\n"
                                                                                        . "ORDER BY Time_modify DESC\n"
                                                                                        . "LIMIT 1 OFFSET 0;");
                                        
                                $row = mysqli_fetch_array($result_clone, MYSQLI_ASSOC);
                                    echo '  <a href="./article.php?id='.$row['ArticleID'].'"  class="hot-article clone" id="art-hot-news">
                                        <article>
                                            <img src="./images/upload/'.$row['ArticleID'].'/'.$row['mainimage'].'" alt="">
                                            <h3> '.$row['Title'].'
                                            </h3>
                                            <i class="time-label">'.$row['Time_modify'].'</i>
                                        </article>
                                    </a>';
                                // giải phóng bộ nhớ
                                mysqli_free_result($result);   
                            ?>
                                </div>
                                

                            </div>
                            
                            <button class="btn slide-right" onclick="loadArtNext(true, true); clearHotNewsTimer()"><i class="fa-solid fa-arrow-right"></i></button>
                        </div>
                        

                    </div>
                    <script>
                        
                    </script>
                    <div class="homepage-content current-news">
                        <i class="fa-solid fa-square-rss"></i>
                        <h2 class="type-title" >Tin mới</h2>
                        <hr class="hr_cat">
                        <div class="current-news-container">
                        <?php
                                require_once("../app/model/articleDAO.php");
                                $DAOArticle = new articleDAO();
                                $sql = "SELECT ArticleID,Title, Time_modify, mainimage from article\n"
                                . "where ArticleStatus = 1\n"
                                . "ORDER BY Time_modify DESC\n"
                                . "LIMIT 20;";
                                $result = $DAOArticle->getListArticleQuery($sql);     
                                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                                        echo '
                                        <a href="./article.php?id='.$row['ArticleID'].'" class="article-news">
                                        <article>    
                                                    <h3> <i class="fa-solid fa-caret-right" style="color: #f31212;"></i> '.$row['Title'].'
                                                    </h3>
                                                    <i class="time-label">'.$row['Time_modify'].'</i>
                                                    <hr class="hr_article">
                                        </article>
                                    </a>
                                        
                                        ';
                                }    
                                mysqli_free_result($result);   
                            ?>
                           

                        </div>
                    </div>
                    </div>
                    <div class="homepage-row-2">
                        <div class="homepage-content thoi-su">
                            <div class="thoisu-head-container">
                                <div class="thoisu-title-container">
                                    <i  class="fa-solid fa-globe"></i>
                                    <h2 class="type-title" >Chính trị<h2>
                                </div>
                                <div class="thoisu-button-container">
                                    <button onclick="loadArtThoiSuNext(false, true);" class="left-btn"><i class="fa-solid fa-arrow-left"></i></button>
                                    <button onclick="loadArtThoiSuNext(true, true);"class="right-btn"><i class="fa-solid fa-arrow-right"></i></button>
                                </div>
                                
                            </div>
                            <hr class="hr_cat">
                            <div class="article-thoisu-container">
                            <div class="thoisu-wrapper" id="thoisu-wrapper">
                                    <?php
                                        require_once("../app/model/articleDAO.php");
                                        $DAOArticle = new articleDAO();
                                        $sql = 'SELECT * FROM article INNER JOIN category ON article.CategoryID = category.CategoryID
                                                        WHERE category.CategoryName = "Chính trị"
                                                        ORDER BY time_modify DESC
                                                        LIMIT 5 OFFSET 5';
                                        $result = $DAOArticle->getListArticleQuery($sql);     
                                        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
                                        {
                                            echo '<a href="./article.php?id='.$row['ArticleID'].'" class="thoisu-article clone">
                                                <img src="./images/upload/'.$row['ArticleID'].'/'.$row['MainImage'].'" alt="">
                                                <p>'.$row['Title'].'</p> 
                                                <i class="time-label">'.$row['Time_modify'].'</i>
                                                </a>';
                                        }
                                        mysqli_free_result($result); 


                                        $sql = 'SELECT * FROM article INNER JOIN category ON article.CategoryID = category.CategoryID
                                                       WHERE category.CategoryName = "Chính trị" and ArticleStatus = 1
                                                       ORDER BY time_modify DESC
                                                        LIMIT 10';
                                        $result = $DAOArticle->getListArticleQuery($sql);     
                                        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
                                        {
                                            echo '<a href="./article.php?id='.$row['ArticleID'].'" class="thoisu-article">
                                                <img src="./images/upload/'.$row['ArticleID'].'/'.$row['MainImage'].'" alt="">
                                                <p>'.$row['Title'].'</p> 
                                                <i class="time-label">'.$row['Time_modify'].'</i>
                                                </a>';
                                        }
                                        mysqli_free_result($result); 


                                        $sql = 'SELECT * FROM article INNER JOIN category ON article.CategoryID = category.CategoryID
                                                        WHERE category.CategoryName = "Chính trị" and ArticleStatus = 1
                                                        ORDER BY time_modify DESC
                                                        LIMIT 5';
                                        $result = $DAOArticle->getListArticleQuery($sql);     
                                        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
                                        {
                                            echo '<a href="./article.php?id='.$row['ArticleID'].'" class="thoisu-article clone">
                                                <img src="./images/upload/'.$row['ArticleID'].'/'.$row['MainImage'].'" alt="">
                                                <p>'.$row['Title'].'</p> 
                                                <i class="time-label">'.$row['Time_modify'].'</i>
                                                </a>';
                                        }
                                        mysqli_free_result($result); 
                                    ?>

                            </div>
                            </div>
                        </div>

                    </div>
                    <?php
                        include('../app/views/partials/banner-horizon.php');
                    ?>
                    <div class="homepage-row-3">
                        <div class="homepage-content chinh-quyen">
                                <i class="fa-solid fa-coins"></i>
                                <h2 class="type-title" >Kinh tế<h1>
                                <hr class="hr_cat">
                                <div class="row-3 module-1-container">
                                    <div class="module-1 top-news">
                                        <?php
                                            require_once("../app/model/articleDAO.php");
                                            $DAOArticle = new articleDAO();
                                            $sql = 'SELECT * FROM article INNER JOIN category ON article.CategoryID = category.CategoryID
                                                     WHERE category.CategoryName = "Kinh tế" AND ArticleStatus = 1
                                                     ORDER BY Time_modify DESC LIMIT 6';
                                            $result = $DAOArticle->getListArticleQuery($sql);  
                                            $row = mysqli_fetch_assoc($result); 
                                            echo '<a href="./article.php?id='.$row['ArticleID'].'" class="top-news container">
                                             <img src="./images/upload/'.$row['ArticleID'].'/'.$row['MainImage'].'" alt="">
                                            <p>'.$row['Title'].'</p>
                                            <i class="time-label" >'.$row['Time_modify'].'</i>';
                                        ?>
                                    </div>
                                    <div class="module-1 list-news">
                                        <?php
                                        while($row = mysqli_fetch_assoc($result))
                                        {   
    
                                            echo '<a href="./article.php?id='.$row['ArticleID'].'" class="list-news container">';
                                            if(!$row['MainImage']) {
                                                $row['MainImage'] = 'default.png';
                                                $row['ArticleID'] = 'default';
                                            }
                                            echo '
                                            <img src="./images/upload/'.$row['ArticleID'].'/'.$row['MainImage'].'" alt="">
                                            <div class="news-title">
                                            <p>'.$row['Title'].'</p>
                                            <i class="time-label" >'.$row['Time_modify'].'</i> </div> </a>';
                                        }
                                        mysqli_free_result($result);
                                        ?>
                                    </div>
                                </div>

                            </div>
                        <div class="homepage-content van-hoa">
                            <i class="fa-solid fa-earth-americas"></i>
                            <h2 class="type-title" >Văn hóa<h1>
                            <hr class="hr_cat">
                            <div class="row-3 module-2-container">
                                    <div class="module-2 top-news">
                                        <?php
                                            require_once("../app/model/articleDAO.php");
                                            $DAOArticle = new articleDAO();
                                            $sql = 'SELECT * FROM article INNER JOIN category ON article.CategoryID = category.CategoryID
                                                     WHERE category.CategoryName = "Văn hóa" AND ArticleStatus = 1
                                                     ORDER BY Time_modify DESC LIMIT 6';
                                            $result = $DAOArticle->getListArticleQuery($sql);  
                                            $row = mysqli_fetch_assoc($result); 
                                            echo '<a href="./article.php?id='.$row['ArticleID'].'" class="top-news container">
                                             <img src="./images/upload/'.$row['ArticleID'].'/'.$row['MainImage'].'" alt="">
                                            <p>'.$row['Title'].'</p>
                                            <i class="time-label" >'.$row['Time_modify'].'</i>';
                                        ?>
                                    </div>
                                    <div class="module-1 list-news">
                                        <?php
                                        while($row = mysqli_fetch_assoc($result))
                                        {
                                                echo '<a href="./article.php?id='.$row['ArticleID'].'" class="list-news container">
                                               <img src="./images/upload/'.$row['ArticleID'].'/'.$row['MainImage'].'" alt="">
                                                <div class="news-title">
                                                <p>'.$row['Title'].'</p>
                                                <i class="time-label" >'.$row['Time_modify'].'</i> </div> </a>';
                                        }
                                        mysqli_free_result($result);
                                        ?>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div style="display: none;" class="homepage-row-4">
                        <div class="homepage-content du-lich">
                            <i class="fa-solid fa-plane"></i>
                            <h2 class="type-title">Du lịch</h2>
                            <hr class="hr_cat">
                            <div class="line-four-content-warpper">
                            
                            <div class="slideshow-container">
                                <?php
                                    $dir = "./images/imgDemoDulich/";
                                    $files = scandir($dir);
                                    foreach ($files as $file) {
                                        if (in_array(pathinfo($file, PATHINFO_EXTENSION), ['jpg', 'jpeg', 'png', 'gif'])) {
                                            echo '<div class="slide"><img src="'.$dir.$file.'" alt=""></div>';
                                        }
                                    }
                                ?>
                                <button class="prev">&#10094;</button>
                                <button class="next">&#10095;</button>
                            </div>

                            <div class="scroll-container">
                                <?php
                                    foreach ($files as $file) {
                                        if (in_array(pathinfo($file, PATHINFO_EXTENSION), ['jpg', 'jpeg', 'png', 'gif'])) {
                                            echo '<div class="scroll-img"><img src="'.$dir.$file.'" alt=""></div>';
                                        }
                                    }
                                ?>
                            </div>
                        </div>

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

