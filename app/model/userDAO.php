<?php
    require_once '../app/config/database.php';

    class UserDAO{
        private $conn;
        
        public function __construct() {
            $this->conn = DatabaseConnection::getConnection();
        }
        public function addUserAccount(User $user )
        {
            $roleID = '1';
            $stm = $this->conn->prepare("Insert into UserData(Username, Password, Fullname, Email, Role_id) values(?,?,?,?,?)");
            //$stm->bind_param("sssss",  $user->getUsername(), $user->getPassword(), $user->getFullname(), $user->getEmail(), $roleID );

            return $stm->execute([$user->getUsername(),  $user->getPassword(),$user->getFullname(),$user->getEmail(),$roleID]);
        }
        public function getUserAccount()
        {
            
        }
    }

?>