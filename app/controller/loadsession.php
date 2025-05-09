<?php

    
    session_start();
    $conn = mysqli_connect("localhost", "root", "") or die("Hem kết nối được");
    mysqli_set_charset($conn, "utf8");
    mysqli_select_db( $conn,"BinhDinhNews") or die("Đéo tìm thấy db");
    if(isset($_COOKIE['auth'])){
        if(!isset($_SESSION['username']) &&  !isset($_SESSION['role']))
        {
            session_destroy();
            $sql = "Select * from UserData where AuthCookies = '".$_COOKIE['auth']."'";
            $result = mysqli_query($conn, $sql);
            $data = mysqli_fetch_assoc($result);
            $_SESSION['role'] = $data['ROLE'];
            $_SESSION['username'] = $data['UserName'];  
            mysqli_close($conn);
        }

    }
    else{
        session_destroy();
        $_SESSION['username'] = "khach";
        $_SESSION['role'] = -1;
    }

?>