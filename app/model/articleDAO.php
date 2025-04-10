<?php
    require_once '../app/config/database.php';
    class articleDAO{
        private $conn;
        function __construct()
        {
            $this->conn = DatabaseConnection::getConnection();
        }
        function getListArticle($query)
        {
            return $this->conn->query($query);
        }
    }
?>