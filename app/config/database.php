<?php
    class DatabaseConnection{


        public static function getConnection()
        {
            $conn = mysqli_connect("localhost", "root", "") or die("Hem kết nối được");
            mysqli_select_db( $conn,"BinhDinhNews", ) or die("Đéo tìm thấy da");
            mysqli_set_charset($conn, "utf8");
            return $conn;
        }
        public static function closeConnection($conn)
        {
            mysqli_close($conn);
        }

    }
?>
