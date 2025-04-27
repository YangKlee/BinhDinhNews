<?php
    class DatabaseConnection{


        public static function getConnection()
        {
            $conn = mysqli_connect("localhost", "root", "") or die("Hem kết nối được");
            mysqli_select_db( $conn,"BinhDinhNewsBeta", ) or die("Đéo tìm thấy da");
            return $conn;
        }
        public static function closeConnection($conn)
        {
            mysqli_close($conn);
        }

    }
?>