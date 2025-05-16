<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/reset.css">
	<link rel="stylesheet" href="../../css/footer-style.css">
	<link rel="stylesheet" href="../../css/header-style.css">
    <link rel="stylesheet" href="../../css/article-style.css">
    <link rel="stylesheet" href="../../css/rightmenu-style.css">
    <link rel="stylesheet" href="../../css/category-style.css">
    <script src="https://kit.fontawesome.com/8f5e4d2946.js" crossorigin="anonymous"></script>
    <link rel="icon" href="../../images/logo.webp" type="image/x-icon">
    <script src="./scripts/homePage.js"></script>
    <title>Tìm kiếm: 
        <?php if(isset($_POST['search']) 
        && $_POST['search'] != "") 
            echo $_POST['search']; 
        else echo "? Troll à ?"
        ?> </title>
</head>
<body>
    <?php
        include('../../../app/views/partials/header.php');
    ?>
    <div class="container-theloai">
        <div class="container-left"></div>
        <div class="container-mid">
            <?php
            require('../../../app/model/ArticleDAO.php');
            $artDAO = new articleDAO();
            $sql = "SELECT * FROM `article` WHERE (Tags LIKE '%".$_POST['search']."%' 
                    OR Title LIKE '%".$_POST['search']."%') AND articleStatus = 1 ORDER BY Time_modify DESC
                    LIMIT 10";
            $result = $artDAO->getListArticleQuery($sql);
            if(mysqli_num_rows($result) > 0)
            {
                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
                {
                    $filename = '../../../app/ArticleData/'.$row['ArticleID'].'.txt';
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
                        $content = "Read file Error";
                    } echo '
                            <div class="article-container">
                                <a href="../../article.php?id='.$row['ArticleID'].'" class="article-element">
                                    <div class="article-element-left">
                                        <img src="../../images/upload/'.$row['ArticleID'].'/'.$row['MainImage'].'" alt="">
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
            }
            else{
                echo '<h1 class="cat-title">Không tìm thấy kết quả nào</h1>';
            }
            ?>
        </div>
        <div class="container-right">
            <?php 
                include('../../../app/views/right/homepage.php');
            ?>
        </div>
    </div>
    <?php
    include('../../../app/views/partials/footer.php');
    ?>
</body>
</html>