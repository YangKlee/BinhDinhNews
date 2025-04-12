<?php
    class DatabaseConnection{
        private static $nameserver = 'localhost:3306';
        private static $username = 'root';
        private static $password = '';
        private  static $dbname = 'Binhdinhnews';

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