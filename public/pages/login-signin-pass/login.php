<?php
    $isSuccess = false;
    $nofi = "";
    $displayNofi = 'none';
    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        require "../../../app/config/database.php";
        $db = new DatabaseConnection();
        $coon = $db->getConnection();
        if (!$coon->connect_error)
        {   
            $statement = $coon->prepare("select * from UserData where (username = ? or email= ?) and password = ?");
            $passwordHash = hash("sha256",$_POST['password'] ) ;
            $statement->bind_param("sss", $_POST['username'], $_POST['username'],$passwordHash );
            $statement->execute();
            $result = $statement->get_result();

            if ($result->num_rows != 0)
            {
                $userData = mysqli_fetch_array($result, MYSQLI_ASSOC);
                // login complete
                echo "<script> alert('Đăng nhập thành công')</script>";
                $cookiesHash = hash("sha256", time() . $userData['UserName'] . $userData['PassWord']);
                
                // xóa session cũ
                    if (session_status() === PHP_SESSION_ACTIVE) {
                        session_destroy();
                    }
                // nếu chọn nhớ pass
                if($_POST['remember-pass']){
                    setcookie("auth", $cookiesHash, time() + 60 * 60 * 24 , "/");
                    // lưu cookie hash vô db
                    $sql = "Update UserData set AuthCookies = '".$cookiesHash."' where UserID = ".$userData['UserID']."";
                    mysqli_query($coon, $sql);
                }
                else{
                    session_start();
                    $_SESSION['UID'] = $userData['UserID'];
                }
                

                
                if($userData['ROLE'] == 0) // nhảy sang trang người dùng
                {
                    header("Location: ../../index.php");
                    exit();
                }
                else if($userData['ROLE'] == 1) // nhảy sang trang nhà báo
                {
                    header("Location: ../../admin/index.php");
                    exit();
                }
                else if($userData['ROLE']== 2)
                {
                    header("Location: ../../Admin/index.php");
                    exit();
                }

            } 

            else
            {
                echo "<script> alert('Sai tài khoản hoặc mật khẩu') </script>";
                $nofi = "Đăng nhập thất bại";
            }
            mysqli_close($coon);
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Trang Đăng Nhập </title>
    <link rel="stylesheet" href="../../css/login-style.css">
    <link rel="stylesheet" href="../../css/mini-footer-style.css">
    <link rel="icon" href="../../images/logo.webp" type="image/x-icon">
    <script src="../../scripts/hide-password.js"></script>
</head>

<body>
    <form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
        <h3>Đăng nhập</h3>
        <div class="username-input-wrapper">
            <label for="username">Tên đăng nhập</label>
            <input type="text" placeholder="Email hoặc Tên Đăng Nhập" id="username" name="username">
        </div>

        <div class="password-input-wrapper">
            <label for="password">Mật khẩu</label>
            <div class="input-icon-wrapper">
                <input type="password" placeholder="Mật khẩu" id="password" name="password">
                <span class="icon-eye">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="icon-eye-inactive" style="display:none;">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="icon-eye-active">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 001.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.45 10.45 0 0112 4.5c4.756 0 8.773 3.162 10.065 7.498a10.523 10.523 0 01-4.293 5.774M6.228 6.228L3 3m3.228 3.228l3.65 3.65m7.894 7.894L21 21m-3.228-3.228l-3.65-3.65m0 0a3 3 0 10-4.243-4.243m4.242 4.242L9.88 9.88" />
                    </svg>
                </span>
            </div>
        </div>
        
        <label class="checkbox-rememberpass-warper">
            <input type="checkbox" name="remember-pass">
            Lưu đăng nhập
        </label>

        <div class="submit-wrapper">
            <input type="submit" value="Đăng nhập" id="login-btn" name="loginbtn">
        </div>
        <a href="signin.php">Chưa có tài khoản ?</a>
        <a href="fogot-password.php">Quên mật khẩu ?</a>
    </form>

    <div class="login-nofication" style="display: <?php echo $displayNofi ?>;">
    </div>
    <?php 
        include("../../../app/views/partials/mini-footer.php");
    ?>
</body>
</html>
