<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/footer-style.css">
	<link rel="stylesheet" href="./css/header-style.css">
    <link rel="stylesheet" href="./css/article-style.css">
    <link rel="stylesheet" href="./css/rightmenu-style.css">
    <script src="https://kit.fontawesome.com/8f5e4d2946.js" crossorigin="anonymous"></script>
    <script src="./scripts/zoom-img.js"></script>
    <title><?php 
        require_once('../app/model/ArticleDAO.php');
        $artDAO = new articleDAO();
        $result = $artDAO->getArticle($_GET['id']);
        
        // Kiểm tra xem bài viết có tồn tại khôngs
        if (mysqli_num_rows($result) > 0) {
            $title = mysqli_fetch_array($result, MYSQLI_ASSOC);
            echo htmlspecialchars($title['Title'], ENT_QUOTES, 'UTF-8');
        } else {
            echo "Bài viết không tồn tại";
        }
    ?></title>
    <link rel="icon" href="./images/logo.webp" type="image/x-icon">
</head>
<?php
        include('../app/views/partials/header.php');

    ?>
<body>

    <div class="container-article">
        <div class="container-left"></div>
        <div class="art-content">
        <?php
            require_once('../app/model/ArticleDAO.php');
            $artDAO = new articleDAO();
            $result = $artDAO->getArticle($_GET['id']);
            // kiểm tra trong database có tồn tại bài báo với id đưa vào hay k
            if(mysqli_num_rows($result) > 0)
            {
                $rawData = mysqli_fetch_array($result, MYSQLI_ASSOC);
                // tách chuỗi đường dẫn ảnh thành array
                if($rawData['ListImage'] != null && $rawData['ListImage'] != "")
                    $listimg = explode("|", $rawData['ListImage']);
                else
                    $listimg = [];
                $imgCount = 0;
                // lấy tiêu đề
                echo "<h1> ".$rawData['Title']."</h1>";
                echo "<i class='time_descrip'> ".$rawData['Time_modify']."</i>";
                            // lấy file id từ tham số id
                // mode r = read only
                $f = fopen("../app/ArticleData/".$_GET['id'].".txt", 'r') or die("<h1>Không tìm thấy bài báo</h1>   ");
                echo '<p><b>'.fgets($f).'</b></p>';
                //kiểm tra xem đã đến cuối file (EOF: End Of File) chưa.
                while(!feof($f))
                {
                    // get dòng đầu tiên và in đậm
                    
                    // get từng dòng
                    $rows = fgets($f);
                    // lọc dấu cách
                    $rows = trim($rows);
                    // kiểm tra có phải là ảnh không
                    if($rows == "[img]" )
                    {
                        // kiểm tra còn hình ảnh nào chưa đc lấy
                        if($imgCount < count($listimg))
                        {
                            // lấy ảnh
                            $imgName = trim($listimg[$imgCount]);
                            $imgDescrip = trim(fgets($f));
                            echo '<img src="./images/upload/'.$rawData['ArticleID'].'/'.$imgName.'" alt="'.$imgDescrip.'">';
                            // lấy mô tả hình ảnh
                            echo '<i class="img_descrip">'.$imgDescrip.'</i>';
                            $imgCount++;
                        }
                        // bỏ qua các mô tả hình ảnh còn lại
                        // fgets($f);
                        
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
        <div class="container-right">
            <?php
                include("../app/views/right/homepage.php");
            ?>
        </div>

    </div>

    <div class="img-overlay">
        <img src="" alt="Hình ảnh phóng to">
    </div>

</body>
   

<?php
        include('../app/views/partials/footer.php');
    ?>
