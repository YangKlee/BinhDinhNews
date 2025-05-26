<?php
    if(isset($_GET['idart']) && $_SERVER['REQUEST_METHOD'] == 'GET')
    {
            require_once "../model/articleDAO.php";
        $artDAO = new articleDAO();
        $result = $artDAO->getArticle($_GET['idart']);
        $data = mysqli_fetch_assoc($result);
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