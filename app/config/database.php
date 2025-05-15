<?php
    class DatabaseConnection{
        public static function getConnection()
        {
            $conn = mysqli_connect("localhost", "root", "") or die("Không kết nối được");
            mysqli_set_charset($conn, "utf8");
            mysqli_select_db( $conn,"BinhDinhNews") or die("Không tìm thấy da");
            return $conn;
        }

        public static function closeConnection($conn)
        {
            mysqli_close($conn);
        }

    }
?>
