<?php
    class DatabaseConnection{
        private static $nameserver = 'localhost';
        private static $username = 'root';
        private static $password = '';
        private  static $dbname = 'binhdinhnews';

        public static function getConnection()
        {
            $conn = new mysqli(self::$nameserver, self::$username, self::$password, self::$dbname);
            return $conn;
        }
        public static function closeConnection($conn)
        {
            $conn->closeConnection();
        }

    }
?>