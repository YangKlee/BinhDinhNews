<?php
    class DatabaseConnection{
        private $nameserver = 'localhost';
        private $username = 'root';
        private $password = '';
        private $dbname = 'binhdinhnews_demo';

        public function getConnection()
        {
            $conn = new mysqli($this->nameserver, $this->username, $this->password, $this->dbname);
            return $conn;
        }
        public function closeConnection($conn)
        {
            $conn->closeConnection();
        }

    }
?>