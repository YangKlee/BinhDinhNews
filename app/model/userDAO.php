<?php
    require_once '../app/config/database.php';

    class UserDAO{
        
        function getConnection()
        {
            $dbConnect =  new DatabaseConnection();
            return $dbConnect->getConnection();
        }
        
        function getUserByAuthCokkies($authcode){
            $conn = $this->getConnection();
            $sql = "Select * from UserData where AuthCookies = '".$authcode."'";
            $result = mysqli_query($conn, $sql);
            $data = mysqli_fetch_assoc($result);
            mysqli_close($conn);
            return $data;
        }

        function getUserByEmail($email){
            $conn = $this->getConnection();
            $sql = $conn->prepare("Select * from UserData where email = ?");
            $sql->bind_param("s", $email);
            $sql->execute();
            $result = $sql->get_result();
            $data = mysqli_fetch_assoc($result);
            mysqli_close($conn);
            return $data;
        }
    }

?>