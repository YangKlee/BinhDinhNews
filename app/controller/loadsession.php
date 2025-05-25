<?php

    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
     require_once $_SERVER['DOCUMENT_ROOT']. "/BinhDinhNews/app/model/userDAO.php";
     $userDAO = new UserDAO();

    if(isset($_SESSION['UID']))
    {
        $data = $userDAO->getAuthorInfo($_SESSION['UID']);
        $_SESSION['role'] = $data['ROLE'];
        $_SESSION['username'] = $data['UserName'];  
    }
    else if(isset($_COOKIE['auth'])){
        { 
            $result = $userDAO->getUserByAuthCokkies($_COOKIE['auth']);

            if ($result && mysqli_num_rows($result) > 0) {
                $data = mysqli_fetch_assoc($result);
                $_SESSION['role'] = $data['ROLE'];
                $_SESSION['username'] = $data['UserName'];  
                $_SESSION['UID'] = $data['UserID'];
            } else {
                // Nếu không tìm thấy auth hợp lệ
                $_SESSION['username'] = "khach";
                $_SESSION['role'] = -1;
                $_SESSION['UID'] = null;
            }
                mysqli_close($conn);
        }

    }
    else{
        $_SESSION['username'] = "khach";
        $_SESSION['role'] = -1;
        $_SESSION['UID'] = null;
    }
?>