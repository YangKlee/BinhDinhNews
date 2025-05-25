<?php
    require_once '../model/userDAO.php';

    function updatePassword($email, $newPassword)
    {
        $user = new UserDAO();
        $conn = $user->getConnection();
        $sql = "UPDATE `userdata` SET `Password`='" . $newPassword . "' WHERE `Email`='" . $email . "'";
        
    }
?>