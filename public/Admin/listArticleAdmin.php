<?php
    require "../../app/controller/loadsession.php"

?>
<?php
    if($_SESSION['role'] < 1)
    {
        header("Location: ./firewall.php");    
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/viewListArticleAdmin.css">

    <link rel="stylesheet" href="../css/menu-admin.css">
    <link rel="stylesheet" href="../css/reset.css">
    <title>Document</title>
</head>
<body>
    <div class="main-container">
         <div class="left-container">
            <?php
                include "../../app/views/left/menu-admin.php";
                
            ?>

        </div>
        
       <div class="right-container">
            <div class = "container-article-list">
                <h1>Danh sách bài báo của tôi</h1>
                <?php
                    include( $_SERVER['DOCUMENT_ROOT'].'/BinhDinhNews/app/model/ArticleDAO.php');
                    $artilces_per_page = 2;
                    $current_page = $_GET['page'] ?? 1;
                    $artDAO = new articleDAO();
                    // $sql = "SELECT * FROM `article` WHERE AuthorID = ".$_SESSION['UID']." ORDER BY Time_modify DESC
                    //         LIMIT ".$artilces_per_page." OFFSET ".($current_page - 1) * $artilces_per_page."";
                    if($_SESSION['role'] == 1)
                        $sql = "SELECT * FROM `article` WHERE AuthorID = ".$_SESSION['UID']." ORDER BY Time_modify DESC";
                    else if($_SESSION['role'] == 2)
                        $sql = "SELECT * FROM `article`  ORDER BY Time_modify DESC";
                    $result = $artDAO->getListArticleQuery($sql);
                    $total_articles = mysqli_num_rows(mysqli_query($artDAO->getConnection(), "SELECT * FROM `article` WHERE AuthorID = ".$_SESSION['UID']." "));

                    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
                    {
                        $filename =  $_SERVER['DOCUMENT_ROOT']. '/BinhDinhNews/app/ArticleData/'.$row['ArticleID'].'.txt';
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
                        $statusArticle = null;
                        if($row['ArticleStatus'] == 0)
                        {
                            $statusArticle = '<label style="color:yellow;font-size:1.8rem">Chờ duyệt</label>';
                        }
                        else if($row['ArticleStatus'] == 1){
                            $statusArticle = '<label style="color:green;font-size:1.8rem">Đã đăng</label>';
                        }
                        else if($row['ArticleStatus'] == -1){
                            $statusArticle = '<label style="color:red;font-size:1.8 rem">Đã bị hủy</label>';
                        }
                        echo '
                        
                        <div class="article-container">
                            <article  class="article-element">
                                <div class="article-element-left">
                                    <img src="../images/upload/'.$row['ArticleID'].'/'.trim($row['MainImage']).'" alt="">
                                </div>
                                <div class="article-element-right">
                                    <h3>'.$row['Title'].'</h3>
                                    <i>'.$row['Time_modify'].'</i>
                                    <p>'. $content.'</p>
                                    '.$statusArticle.'

                                </div>
                                ';   
                        echo '
                                <div class="article-element-rightfunction">
                                    <a href="../article.php?id='.$row['ArticleID'].'"><button class="btn btn-view">Xem bài báo</button></a>
                                    <a id="delete-btn" href="/BinhDinhNews/app/controller/deleteArticle.php?idart='.$row['ArticleID'].'"><button class="btn btn-delete">Xóa</button></a>
                                    ';
                        if($row['ArticleStatus'] == 0)
                        {
                            echo '<a id="delete-btn" href="/BinhDinhNews/app/controller/allowArticle.php?idart='.$row['ArticleID'].'"><button class="btn btn-allow">Duyệt bài báo</button></a>';
                        }           
                        echo'           
                                </div>
                            </article>
                            <hr>
                        </div>
                        ';
                        
                    }
                    mysqli_free_result($result);
                ?>

                
            </div>
            <script>
                let deleteBtn = document.querySelectorAll("#delete-btn");
                deleteBtn.forEach(function(element){
                    element.addEventListener("click", function(e){
                        const result = confirm("Bạn chắc chắn muốn xóa bài báo này chứ!");
                        if(!result){
                            e.preventDefault();
                        }
                    })
                });

                
            </script>
       </div> 
    </div>
</body>
</html>