<?php
//kiểm tra role
require "../../app/controller/loadsession.php";
if ($_SESSION['role'] < 1) {
    header("Location: ./firewall.php");
    exit();
}

require_once("../../app/model/DiaDiemDLDAO.php");

if (isset($_GET['iddiadiem'])) {
    $iddiadiem = intval($_GET['iddiadiem']);

    $dao = new DiaDiemDAO();
    $dao->xoa_diadiem($iddiadiem); // chỉ xóa dòng theo id

    // Xoá thư mục ảnh theo ID, id là tên thư mục
    $imgFolder = "../../public/images/imgDuLich/" . $iddiadiem;
    if (is_dir($imgFolder)) {
        //xóa tất cả file trong thư mục 
        unlink("$imgFolder");
        rmdir($imgFolder);
    }

    // Xoá file mô tả.txt theo ID
    $txtFile = "../../app/dulich_data/" .$iddiadiem. ".txt";
    if (file_exists($txtFile)) {
        unlink($txtFile);
    }

    header("Location: dsdiadiem.php");
    exit();
} else {
    echo "Thiếu ID để xoá.";
}
?>
