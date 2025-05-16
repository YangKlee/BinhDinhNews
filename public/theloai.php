<!DOCTYPE html>
<?php
	include('../app/model/CategoryDAO.php');
    $catDAO =  new CategoryDAO();
    $result = $catDAO->getCategory($_GET['idcat']);
    if(mysqli_num_rows($result)> 0)
    {
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $nameCat = $row['CategoryName'];
    }
    mysqli_free_result($result);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/rightmenu-style.css">
    <link rel="stylesheet" href="./css/category-style.css">
    <link rel="stylesheet" href="./css/reset.css">
	<link rel="stylesheet" href="./css/footer-style.css">
	<link rel="stylesheet" href="./css/header-style.css">
    <script src="https://kit.fontawesome.com/8f5e4d2946.js" crossorigin="anonymous"></script>
    <link rel="icon" href="./images/logo.webp" type="image/x-icon">
    <script src="./scripts/homePage.js"></script>
    <title><?php if(isset($nameCat)) echo $nameCat; else echo "Không tìm thấy" ?></title>
</head>
<?php
    include('../app/views/partials/header.php');
?>
<body>

    <div class="container-theloai">
        <div class="container-left"></div>
        <div class="container-mid">
            <h1 class="cat-title">Tin tức <?php if(isset($nameCat)) 
            echo $nameCat; else echo "404 Không tìm thấy" ?> </h1>
            <div class = "container-article-list">
                <?php
                    include('../app/model/ArticleDAO.php');
                    $artilces_per_page = 2;
                    $current_page = $_GET['page'] ?? 1;
                    $artDAO = new articleDAO();
                    $sql = "SELECT * FROM `article` WHERE CategoryID = ".$_GET['idcat']." AND ArticleStatus = 1 ORDER BY Time_modify DESC
                            LIMIT ".$artilces_per_page." OFFSET ".($current_page - 1) * $artilces_per_page."";
                    $result = $artDAO->getListArticleQuery($sql);
                    $total_articles = mysqli_num_rows(mysqli_query($artDAO->getConnection(), "SELECT * FROM `article` WHERE CategoryID = ".$_GET['idcat'].""));
                    $total_pages = ceil($total_articles / $artilces_per_page);

                    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
                    {
                        $filename = '../app/ArticleData/'.$row['ArticleID'].'.txt';
                        $f = fopen($filename, 'r');
                        if($f)
                        {
                            if(!feof($f) )
                            {
                                $content = fgets($f);
                            }
                            else{
                                $content = "Read file Error";
                            }
                            fclose($f);
                        }
                        else{
                            $content = "404 NOT FOUND FILE" . $filename;
                        }

                        if (is_null($row['MainImage']) || $row['MainImage'] == '')
                        {
                            $row['MainImage'] = 'default.png';
                            $row['ArticleID'] = 'default';
                        }
                        echo '
                        <div class="article-container">
                            <a href="./article.php?id='.$row['ArticleID'].'" class="article-element">
                                <div class="article-element-left">
                                    <img src="./images/upload/'.$row['ArticleID'].'/'.$row['MainImage'].'" alt="">
                                </div>
                                <div class="article-element-right">
                                    <h3>'.$row['Title'].'</h3>
                                    <i>'.$row['Time_modify'].'</i>
                                    <p>'. $content.'</p>
                                </div>
                            </a>
                            <hr>
                        </div>
                        ';
                        
                    }
                    mysqli_free_result($result);
                    require_once('../app/controller/paginationHelper.php');
                    page_navigation($total_pages, $current_page);
                ?>
                <!-- <div class="article-container">
                    <a href="" class="article-element">
                        <div class="article-element-left">
                            <img src="" alt="">
                        </div>
                        <div class="article-element-right">
                            <h3>Title</h3>
                            <i>Time</i>
                            <p>Content</p>
                        </div>
                    </a>
                    <hr>
                </div> -->
                
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
