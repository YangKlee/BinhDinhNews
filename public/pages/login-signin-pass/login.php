
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
                echo "<script> alert('Dang nhap thanh cong')</script>";
                $cookiesHash = hash("sha256", time() . $userData['UserName'] . $userData['PassWord']);
                setcookie("auth", $cookiesHash, time() + 60 * 60 * 24 , "/");
                // lưu cookie hash vô db
                $sql = "Update UserData set AuthCookies = '".$cookiesHash."' where UserID = ".$userData['UserID']."";
                mysqli_query($coon, $sql);
                session_destroy();

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
                else if($userData['ROLE' == 2])
                {
                    header("Location: ../../Admin/index.php");
                    exit();
                }

                } 

            else
            {
                echo "<script> alert('Dang nhap that bai') </script>";
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
</head>

<body>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
        <h3>Đăng nhập</h3>

        <label for="username">Tên đăng nhập</label>
        <input type="text" placeholder="Email hoặc Tên Đăng Nhập" id="username" name="username">

        <label for="password">Mật khẩu</label>
        <input type="password" placeholder="Mật khẩu" id="password" name="password">
        <input type="submit" value="Đăng nhập" id="loginbtn" name="loginbtn">

        <a href="signin.php">Chưa có tài khoản ?</a>
        <a href="#">Quên mật khẩu ?</a>
    </form>
    <div class="login-nofication" style="display: <?php echo $displayNofi ?>;">
    </div>
    <?php 
        //include("./partials/mini-footer.php");
    ?>
</body>
</html>
