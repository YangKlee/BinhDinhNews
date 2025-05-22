<?php
    require_once $_SERVER['DOCUMENT_ROOT'].'/BinhDinhNews/app/config/database.php';

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
        function getAuthorInfo($uid)
        {
            $conn = $this->getConnection();
            $sql = "Select * from UserData where UserID = " . $uid. "";
            $result = mysqli_query($conn, $sql);
            $data = mysqli_fetch_assoc($result);
            mysqli_close($conn);
            return $data;
        }
        function updateAuthorInfo($uid, $fullname, $sdt,$email , $cccd, $adias, $organ)
        {
            $conn = $this->getConnection();
            $sql = "UPDATE `userdata` 
                    SET `Email`='" . $email . "',
                        `FullName`='" . $fullname . "',
                        `Phone`='" . $sdt . "',
                        `Alias`='" . $adias . "',
                        `Organization`='" . $organ . "',
                        `CCCD`='" . $cccd . "'
                    WHERE `UserID`='" . $uid . "'";
             if(mysqli_query($conn, $sql))
             {
                mysqli_close($conn);
                return true;
             }
             mysqli_close($conn);
             return false;
             

        }
        function updateAuthorAvatar($uid, $img)
        {
            $conn = $this->getConnection();
            $sql = "UPDATE `userdata` 
            SET `user_img` = '".$img."'
             WHERE `UserID`='".$uid."'";
             if(mysqli_query($conn, $sql))
             {
                mysqli_close($conn);
                return true;
             }
             mysqli_close($conn);
             return false;
        }
        function updateUserPassword($uid, $newPassword)
        {

        }
    }

?>