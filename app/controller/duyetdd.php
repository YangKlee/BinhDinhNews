<?php
   
    if(isset($_GET['iddiadiem']))
    {
        require_once "../model/DiaDiemDLDAO.php";
        $ddDAO = new DiaDiemDAO();
        $ddDAO->duyetdiadiem($_GET['iddiadiem']);
        header("Location: ../../public/admin/dsdiadiem.php");    
    }

?>
