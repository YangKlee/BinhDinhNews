<?php
    require_once '../app/config/database.php';

    class UserDAO{
        
        function getConnection()
        {
            $dbConnect =  new DatabaseConnection();
            return $dbConnect->getConnection();
        }
        function getUserByAuthCokkies(){
            
        }
    }

?>