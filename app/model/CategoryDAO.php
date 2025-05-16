<?php
    require_once $_SERVER['DOCUMENT_ROOT'].'/BinhDinhNews/app/config/database.php';
    class CategoryDAO{
        function getConnection()
        {
            $dbConnect =  new DatabaseConnection();
            return $dbConnect->getConnection();
        }
        function getAllCategory()
        {
            $conn = $this->getConnection();
            $sql = "SELECT * FROM `category` WHERE 1";
            $kqua = mysqli_query($conn, $sql);
            mysqli_close($conn);
            return $kqua;
        }
        function getCategory($id){
            $conn = $this->getConnection();
            $sql = "SELECT * FROM `category` WHERE CategoryID = ".$id."";
            $kqua = mysqli_query($conn, $sql);
            mysqli_close($conn);
            return $kqua;
        }
    }
    

?>