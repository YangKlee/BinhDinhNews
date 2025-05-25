<?php
    if(isset($_GET['idart']) && $_SERVER['REQUEST_METHOD'] == 'GET')
    {
            require_once "../model/articleDAO.php";
        $artDAO = new articleDAO();
        $artDAO->allowArticle($_GET['idart']);
        header("Location: ../../public/admin/listArticleAdmin.php");    
    }

?>