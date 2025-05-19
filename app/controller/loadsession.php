<?php

    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    $conn = mysqli_connect("localhost", "root", "") or die("Hem kết nối được");
    mysqli_set_charset($conn, "utf8");
    mysqli_select_db( $conn,"BinhDinhNews") or die("Đéo tìm thấy db");
    if(isset($_COOKIE['auth'])){
        // if(!isset($_SESSION['username']) ||  !isset($_SESSION['role']) ||  !isset($_SESSION['UID']))
        {

            
            // echo $_SESSION['username'];
            $sql = "Select * from UserData where AuthCookies = '".$_COOKIE['auth']."'";
            $result = mysqli_query($conn, $sql);

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