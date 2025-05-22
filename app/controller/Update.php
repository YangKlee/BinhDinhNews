<?php
    require_once '../model/userDAO.php';

    function updatePassword($email, $newPassword)
    {
        $user = new UserDAO();
        $conn = $user->getConnection();
        
    }
?>