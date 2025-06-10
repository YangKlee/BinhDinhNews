<?php
    require "./loadsession.php"

?>
<?php
    // chỉ cho phép nhà báo vs admin xóa bài
    if($_SESSION['role'] < 1)
    {
        header(__DIR__."/../../public/admin/firewall.php");    
        exit;
    }
?>
<?php

    if(isset($_GET['idart']) && $_SERVER['REQUEST_METHOD'] == 'GET')
    {
            require_once "../model/articleDAO.php";
        $artDAO = new articleDAO();
        $result = $artDAO->getArticle($_GET['idart']);
        $data = mysqli_fetch_assoc($result);
        // kiểm tra quyền lần 2, chỉ cho phép nhà báo xóa những bài chính mình đăng và những bài chưa đc duyệt
        if($_SESSION['role'] != 2 && $_SESSION['UID'] != $data['AuthorID'] && $data['ArticleStatus'] == 1)
        {
            header("Location: ".$_SERVER['DOCUMENT_ROOT']."/BinhDinhNews/public/admin/firewall.php");    
            exit;
        }
        $artDAO->deteteArticle($_GET['idart']);
        // dọn dẹp tài nguyên
        $articleDir = $_SERVER['DOCUMENT_ROOT']."/BinhDinhNews/app/ArticleData/".$_GET['idart'].".txt";
        $imageArticledir =   $_SERVER['DOCUMENT_ROOT']."/BinhDinhNews/public/images/upload/".$_GET['idart']."/";
        // xóa file txt bài báo
        if(file_exists($articleDir))
        {
            unlink( $articleDir);
        }
        // xóa các hình ảnh của bài báo
        // xóa ảnh bìa
        if(file_exists($imageArticledir.$data['MainImage']))
        {
            unlink($imageArticledir.$data['MainImage']);
        }
        // xóa các hình ảnh trong bài báo
        $listImage = explode("|", $data['ListImage']);
        foreach($listImage as $img){
            if(file_exists($imageArticledir.$img))
            {
                unlink($imageArticledir.$img);
            }
        }
        mysqli_free_result($result);
        header("Location: ../../public/admin/listArticleAdmin.php");    
    }

?>