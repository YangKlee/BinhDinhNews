<?php
    require_once $_SERVER['DOCUMENT_ROOT'].'/BinhDinhNews/app/config/database.php';
    class dulichDAO{
        function getConnection()
        {
            $dbConnect =  new DatabaseConnection();
            return $dbConnect->getConnection();
        }
        function get_tatca_loaihinh()
        {
            $conn = $this->getConnection();
            $sql = "SELECT * FROM `loaihinh_dulich`";
            $kqua = mysqli_query($conn, $sql);
            mysqli_close($conn);
            return $kqua;
        }
        function get_tung_loaihinh($idloaihinh){
            $conn = $this->getConnection();
            $sql = "SELECT * FROM `loaihinh_dulich` WHERE LoaiHinhID = $idloaihinh";
            $kqua = mysqli_query($conn, $sql);
            mysqli_close($conn);
            return $kqua;
        }
    }
    

?>