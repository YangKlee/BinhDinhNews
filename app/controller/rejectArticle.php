<?php
    require "./loadsession.php"

?>
<?php
    if($_SESSION['role'] !=2)
    {
        header("Location: ".$_SERVER['DOCUMENT_ROOT']."/BinhDinhNews/public/admin/firewall.php");    
        exit;
    }
?>
<?php
    if(isset($_GET['idart']) && $_SERVER['REQUEST_METHOD'] == 'GET')
    {
        require_once "../model/articleDAO.php";
        $artDAO = new articleDAO();
        $artDAO->rejectArticle($_GET['idart']);
        header("Location: ../../public/admin/listArticleAdmin.php");    
    }

?>