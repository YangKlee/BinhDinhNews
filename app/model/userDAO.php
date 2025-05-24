<?php
    require_once $_SERVER['DOCUMENT_ROOT'].'/BinhDinhNews/app/config/database.php';

    class UserDAO{
        private $conn;

        public function setConnection($conn) {
        $this->conn = $conn;
    }

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
        function getAuthorInfo($uid)
        {
            $conn = $this->getConnection();
            $sql = "Select * from UserData where UserID = " . $uid. "";
            $result = mysqli_query($conn, $sql);
            $data = mysqli_fetch_assoc($result);
            mysqli_close($conn);
            return $data;
        }
        function updateAuthorInfo($uid, $fullname, $sdt,$email , $cccd, $adias, $organ, $role )
        {
            $conn = $this->getConnection();
            $sql = "UPDATE `userdata` 
                    SET `Email`='" . $email . "',
                        `FullName`='" . $fullname . "',
                        `Phone`='" . $sdt . "',
                        `Alias`='" . $adias . "',
                        `Organization`='" . $organ . "',
                        `CCCD`='" . $cccd . "',
                         `ROLE` = '".$role."'   
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

        public function isUsernameOrEmailExists($username, $email) {
                $sql = "SELECT * FROM userdata WHERE UserName = ? OR Email = ?";
                $stmt = $this->conn->prepare($sql);
                if (!$stmt) {
                    die("Prepare failed: " . $this->conn->error);
                }
                $stmt->bind_param("ss", $username, $email);
                $stmt->execute();
                $result = $stmt->get_result();
                return $result->num_rows > 0;
            }

        public function createUser($username, $email, $role, $img) {
            $sql = "INSERT INTO userdata (UserName, Email, Role, user_img) VALUES (?, ?, ?, ?)";
            $stmt = $this->conn->prepare($sql);
            if (!$stmt) {
                die("Prepare failed: " . $this->conn->error);
            }
            $stmt->bind_param("ssis", $username, $email, $role, $img);
            return $stmt->execute();
        }

        public function getAllUsers() {
            $conn = $this->getConnection();
            $sql = "SELECT UserID, UserName, Role, user_img FROM userdata ";
            $result = $conn->query($sql);
            $users = [];
            while($row = $result->fetch_assoc()) {
                $users[] = $row;
            }
            $conn->close();
            return $users;
        }
        
        function updateUserPassword($uid, $newPassword)
        {

        }
    }

?>