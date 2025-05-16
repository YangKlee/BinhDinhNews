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
    <script>
        var indexUploadImages = 1;
    </script>
</head>
<body>
    <div class="main-container">
        <div class="left-container">
            <?php
                 include "../../app/views/left/menu-admin.php";
            ?>
        </div>
        <div class="right-container">
            
            <form class="form-article-input" action="../../app/controller/submitBaiBao.php" method="POST" enctype="multipart/form-data"> 
                <h1>Thêm bài báo</h1>    
                <div class="input-warpper tieude-warpper">
                    <label for="">Tiêu đề bài báo <span style="color:red">(*)</span></label>
                    <input type="text" placeholder="Nhập tiêu đề..." name="article-tittle">
                </div>
                <div class="input-warpper tags-warpper">
                    <label for="">Tags(Các tag cách nhau bằng dấu phẩy) </label>
                    <input type="text" placeholder="Nhập các tags" name="article-tags">
                </div>
                <div class="input-warpper category-warpper">
                    <label for="">Chọn thể loại của bài báo <span style="color:red">(*)</span> </label>
                    
                    
                    <select name="cat-selector" class="select-box-input">
                        <?php
                            require_once "../../app/model/CategoryDAO.php";
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
                <div class="input-warpper image-tittle">
                    <label for="">Upload ảnh bìa <span style="color:red">(*)</span> </label>
                    <input type="file" id="myfile" name="imageTitle">
                </div>
                <div class="input-warpper content-warpper">
                    <label for="">Nội dung: <span style="color:red">(*)</span> </label>
                    
                    <textarea name="content-article" id="content-article-area">
                    </textarea>
                </div>
                <div class="input-warpper imagesupload-warpper">
                    <div class="image-list-upload-warpper">
                        <label for="">Danh sách ảnh bài báo </label>
                        <table class="image-upload-table">
                            <tr>
                                <td id="td1">
                                    STT
                                </td>
                                <td id="td2">
                                    Chọn ảnh
                                </td>
                                <td id="td3">
                                    Mô tả ảnh
                                </td>
                                <td id="td4">
                                    Dòng ảnh xuất hiện
                                </td>
                            </tr>

                        </table>

                    </div>    
                        <button onclick="loadNewImageUpload()" type="button" class="btn addimg">Thêm hình ảnh</button>
                </div>
                <script>
                    let imageuploadform = document.querySelector(".image-upload-table");
                    function loadNewImageUpload()
                    {
                        let template = `                            <tr>
                                <td>
                                        ${indexUploadImages}
                                </td>
                                <td>
                                    <input type="file" name="imageArticle_${indexUploadImages}">
                                </td>
                                <td>
                                    <input type="text" placeholder="Nhập mô tả" name="labelArticle_${indexUploadImages}">
                                </td>
                                <td>
                                    <input type="number" name="imageArticle_row_${indexUploadImages}" placeholder="Nhập số dòng">
                                </td>
                            </tr>`;
                        //imageuploadform.innerHTML += template;
                        imageuploadform.insertAdjacentHTML("beforeend", template);
                        indexUploadImages++;
                    }
                </script>

                <input class="btn submit" type="submit" value="Nộp bài báo">
                <button type="button" class="btn delete">Xóa nội dung</button>
            </form>
        </div>
    </div>

</body>