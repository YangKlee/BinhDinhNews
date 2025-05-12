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
    <title>Quản lý</title>
    <link rel="stylesheet" href="../css/menu-admin.css">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/add-article-style.css">

</head>
<body>
    <div class="main-container">
        <div class="left-container">
            <?php
                include "../../app/views/left/menu-admin.php";
            ?>
        </div>
        <div class="right-container">
            <form class="form-article-input" action="#" method="post">
                <div class="input-warpper tieude-warpper">
                    <label for="">Tiêu đề bài báo</label>
                    <input type="text" placeholder="Nhập tiêu đề..." name="article-tittle">
                </div>
                <div class="input-warpper tags-warpper">
                    <label for="">Tags(Các tag cách nhau bằng dấu phẩy)</label>
                    <input type="text" placeholder="Nhập các tags" name="article-tags">
                </div>
                <div class="input-warpper category-warpper">
                    <label for="">Chọn thể loại của bài báo</label>
                    
                    
                    <select name="cat-selector" class="select-box-input">
                        <?php
                            require_once "../../app/model/CategoryDAOAdmin.php";
                            $catDAO = new CategoryDAO();
                            $result = $catDAO->getAllCategory();
                            while($row = mysqli_fetch_assoc($result))
                            {
                                echo '<option value="'.$row['CategoryID'].'">'.$row['CategoryName'].'</option>';
                            }
                            mysqli_free_result($result);
                        ?>
                    </select>
                </div>
                <div class="input-warpper content-warpper">
                    <label for="">Nội dung:</label>
                    <button class="btn images">Danh sách hình ảnh</button>
                    <textarea name="content-article" id="content-article-area">
                    </textarea>
                </div>
                <div class="save-warpper isSaveDraf-chkb">  
                    
                    <input type="checkbox" name="isSaveDraf" >
                    <label for="">Lưu ở dạng nháp (có thể chỉnh sửa sau khi nộp)</label>
                </div>
                <input class="btn submit" type="submit" value="Nộp bài báo">
                <button class="btn delete">Xóa nội dung</button>
            </form>
        </div>
    </div>

</body>