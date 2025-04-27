<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/footer-style.css">
	<link rel="stylesheet" href="./css/header-style.css">
    <link rel="stylesheet" href="./css/article-style.css">
    <script src="https://kit.fontawesome.com/8f5e4d2946.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php
        include('../app/views/partials/header.php');

    ?>
    <div class="art-content">
        <?php
            include('../app/model/ArticleDAO.php');
            $artDAO = new articleDAO();
            $result = $artDAO->getArticle($_GET['id']);
            // kiểm tra trong database có tồn tại bài báo với id đưa vào hay k
            if(mysqli_num_rows($result) > 0)
            {
                $rawData = mysqli_fetch_array($result, MYSQLI_ASSOC);
                // tách chuỗi đường dẫn ảnh thành array
                $listimg = explode("|", $rawData['ListImage']);
                $imgCount = 0;
                // lấy tiêu đề
                echo "<h1> ".$rawData['Title']."</h1>";
                echo "<i class='time_descrip'> ".$rawData['Time_modify']."</i>";
                            // lấy file id từ tham số id
                // mode r = read only
                $f = fopen("../app/ArticleData/".$_GET['id'].".txt", 'r');
                //kiểm tra xem đã đến cuối file (EOF: End Of File) chưa.
                while(!feof($f))
                {
                    // get từng dòng
                    $rows = fgets($f);
                    // lọc dấu cách
                    $rows = trim($rows);
                    // kiểm tra có phải là ảnh không
                    if($rows == "[img]" && $imgCount < count($listimg))
                    {
                        // lấy ảnh
                        echo '<img src="./images/upload/'.$rawData['ArticleID'].'/'.trim($listimg[$imgCount]).'" alt="">';
                        // lấy mô tả hình ảnh
                        echo '<i class="img_descrip">'.fgets($f).'</i>';
                        $imgCount++;
                    }
                    else
                    {
                        
                        echo '<p>'.$rows.'</p>';
                    }
                }
                echo "<i class='author_descrip'>  Tác giả: ".$rawData['AuthorGuestName']."</i>";
                fclose($f);

            }


        ?>
    </div>

    <?php
        include('../app/views/partials/footer.php');
    ?>  

</body>