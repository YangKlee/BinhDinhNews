<?php
   
    if(isset($_GET['id']))
    {
        require_once "../model/DiaDiemDLDAO.php";
        $ddDAO = new DiaDiemDAO();
        $ddDAO->tuchoidiadiem($_GET['id']);
        header("Location: ../../public/admin/dsdiadiem.php");    
    }

?>