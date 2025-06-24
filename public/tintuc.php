<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/rightmenu-style.css">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/tintuc-style.css">
	<link rel="stylesheet" href="./css/footer-style.css">
	<link rel="stylesheet" href="./css/header-style.css">
    <script src="https://kit.fontawesome.com/8f5e4d2946.js" crossorigin="anonymous"></script>
    <link rel="icon" href="./images/logo.webp" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tin tức</title>
</head>
<?php 
    include_once '../app/views/partials/header.php';

?>
<body>
    <div class="container-tintuc">
        <div class="container-left">

        </div>
        <div class="container-mid">
            <div class="tintuc-main">
                <h1 class="tintuc-title">Tin tức theo chuyên mục</h1>
                <div class="tintuc-categories">
                    <?php
                    $categories = [
                        "Chính trị", "Kinh tế", "Thể thao", "Pháp luật", "Du lịch", "Hội nhập quốc tế", "Văn hóa"
                    ];
                    require_once("../app/model/articleDAO.php");
                    $DAOArticle = new articleDAO();
                    foreach ($categories as $cat) {
                        // Lấy CategoryID theo tên chuyên mục
                        $cat_sql = "SELECT CategoryID FROM category WHERE CategoryName = '$cat' LIMIT 1";
                        $cat_result = $DAOArticle->getListArticleQuery($cat_sql);
                        $cat_row = mysqli_fetch_assoc($cat_result);
                        $cat_id = $cat_row ? $cat_row['CategoryID'] : 0;

                        echo '<section class="tintuc-section">';
                        echo '<h2 class="tintuc-cat-title">'.$cat.'</h2>';

                        // Lấy 5 bài mới nhất theo CategoryID
                        $sql = "SELECT ArticleID, Title, Time_modify, mainimage FROM article 
                                WHERE CategoryID = $cat_id AND ArticleStatus = 1
                                ORDER BY Time_modify DESC LIMIT 5";
                        $result = $DAOArticle->getListArticleQuery($sql);

                        echo '<div class="tintuc-list">';
                        while($row = mysqli_fetch_assoc($result)) {
                            echo '<a class="tintuc-item" href="./article.php?id='.$row['ArticleID'].'">
                                    <img src="./images/upload/'.$row['ArticleID'].'/'.$row['mainimage'].'" alt="">
                                    <div>
                                        <h3>'.$row['Title'].'</h3>
                                        <span class="tintuc-time">'.$row['Time_modify'].'</span>
                                    </div>
                                </a>';
                        }
                        echo '</div>';
                        echo '</section>';
                    }
                    ?>
                </div>
            </div>
            
        </div>
        <div class="container-right">
            <?php  include "../app/views/right/homepage.php" ?>
        </div>
    </div>
</body>
<?php
	include('../app/views/partials/footer.php');
?>
</html>