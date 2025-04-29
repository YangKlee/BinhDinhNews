<?php
    class DatabaseConnection{


        public static function getConnection()
        {
            $conn = mysqli_connect("localhost", "root", "") or die("Hem kết nối được");
<<<<<<< Updated upstream
            mysqli_select_db( $conn,"BinhDinhNews", ) or die("Đéo tìm thấy da");
            mysqli_set_charset($conn, "utf8");
=======
            mysqli_select_db( $conn,"BinhDinhNews") or die("Đéo tìm thấy da");
>>>>>>> Stashed changes
            return $conn;
        }
        public static function closeConnection($conn)
        {
            mysqli_close($conn);
        }

    }
?>
