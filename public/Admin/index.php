<?php
    require_once "../../app/controller/loadsession.php"

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
    <title>Quản lý</title>
    <link rel="stylesheet" href="../css/index-admin.css">
    <link rel="stylesheet" href="../css/menu-admin.css">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="shortcut icon" href="../../../../../BinhDinhNews/public/images/logo.webp" type="image/x-icon">

</head>

<body>

    <!-- <style>
        .function-list-container .func1{

        }
    </style> -->
    <div class="main-container">
        <div class="left-container">
            <?php
                include "../../app/views/left/menu-admin.php";
            ?>

        </div>
        <script>
            document.querySelector("#func1").classList.add("active");
        </script>
        <?php 

            $timeCurr = new DateTime();

        ?>
        <div class="right-container">
            <div class="wellcome-title">
                <?php echo "<h1 class='h1-wellcome'> Chào mừng " . $_SESSION['username']."</h1>" ?>
            </div>
            <div class="time-info">
                <h3 class="time-info-title">Thời gian:</h3>
                <div class="time-warpper">
                    <div class="module-time-warpper quy">
                        <label class="time-number" for=""><?php echo $timeCurr->format('d') ?></label>
                        <label class="detial-time-text" for="">Ngày</label>
                    </div>
                    <div class="module-time-warpper thang">
                        <label class="time-number" for=""><?php echo $timeCurr->format('m') ?></label>
                         <label class="detial-time-text" for="">Tháng</label>
                    </div>
                    <div class="module-time-warpper tuan">
                        <label class="time-number" for=""><?php echo $timeCurr->format('Y') ?></label>
                         <label class="detial-time-text" for="">Năm</label>
                    </div>
                </div>
             </div>
            <div class="thong-ke-container">
                <?php
                    require_once $_SERVER['DOCUMENT_ROOT']. "/BinhDinhNews/app/model/articleDAO.php";
                    $artDAO = new articleDAO();
                    if($_SESSION['role'] == 1)
                    {
                        $result = $artDAO->getNumArticle($_SESSION["UID"]);                
                    }
                    else if ($_SESSION['role'] == 2){
                        $result = $artDAO->getNumArticle(0); 
                    }
                    
                ?>
                <table class="table-thongke-article">
                    <th colspan="2">
                        <label class="article-table-title" for="">Bài báo</label>
                    </th>
                    <tr>
                        <td><span class="dot-info-table" style="background-color: green;"></span>Đã đăng</td>
                        <td class="table-result"><?php echo $result['public'] ?></td>
                    </tr>
                    <tr>
                        <td><span class="dot-info-table" style="background-color: yellow;"> </span>Chờ duyệt</td>
                        <td class="table-result"><?php echo $result['pending'] ?></td>
                    </tr>
                    <tr>
                        <td><span class="dot-info-table" style="background-color: red;"></span>Từ chối</td>
                        <td class="table-result"><?php echo $result['reject'] ?></td>
                    </tr>

                </table>
            </div>
        </div>

    </div>
</body>
</html>