<?php
    require "../../app/controller/loadsession.php"

?>
<?php
    if($_SESSION['role'] < 1)
    {
        echo "Người dùng không hợp lệ"; 
    }
?>
<?php
    /**
     * Quy trình xử lý
     * 1. Nhận data từ phương thức post của page newArticle.php
     * 2.Insert phần tiêu đề, tag, ... vào database
     * 3.Lấy ID vừa insert, tạo floder với tên ID đó ở mục ArticleData và UploadImages
     * 4. Lưu bài báo và hình ảnh vào các mục trên, đối với hình ảnh thì cộng thêm time() để tránh trùng lặp
     * 5. Lưu các tên hình ảnh đó vô databases
     */
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        require_once "../model/articleDAOAdmin.php";
        $artDAO = new articleDAO();
        $artDAO->addArticleHeader($_POST['article-tittle'], $_POST['article-tags']
        , NULL, "Test", $_POST['cat-selector'], 0 );

    }

?>