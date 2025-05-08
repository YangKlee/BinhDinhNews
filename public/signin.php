<?php 
    $nofi = "";
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        if(isset($_POST['username_tb']) && $_POST['username_tb'] != "" &&
        isset($_POST['password_tb']) && $_POST['password_tb'] != "" &&
        isset($_POST['email_tb']) && $_POST['email_tb'] != "" &&
        $_POST['password_tb'] == $_POST['repassword_tb'] )
        {
            require "../app/config/database.php";
            $db = new DatabaseConnection();
            $conn = $db->getConnection();
            $query= "Insert into UserData(UserName,PassWord,Email,ROLE) VALUES(?, ? , ?, 0)";
            $sttm = mysqli_prepare($conn,$query);
            mysqli_stmt_bind_param($sttm, "sss", $_POST['username_tb'], hash("sha256",  $_POST['password_tb']), $_POST['email_tb'] );
            mysqli_stmt_execute($sttm);
            echo '<script>        alert("Đăng ký thành công~~")</script>';
        }
        else{
            $nofi = "Sai thông tin";
        }

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="./images/logo.webp" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Trang Đăng Ký </title>
    <link rel="stylesheet" href="./css/signin-style.css">
    <link rel="stylesheet" href="./css/reset.css">
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">

        <h3>Đăng ký</h3>
        <label for="username">Tên đăng nhập <span style="color: red;"> *</span></label>
        <input type="text" id="username"  name="username_tb">
        <label for="username">Email: <span style="color: red;"> *</span></label>
        <input type="text" id="email" name="email_tb">
        <label for="password">Mật khẩu <span style="color: red;"> *</span></label>
        <input type="password"  id="password" name="password_tb">
        <label for="password">Xác nhận mật khẩu <span style="color: red;"> *</span></label>
        <input type="password" id="repassword" name="repassword_tb">
        <div class="nofi-container">
            <?php echo '<i style="color: red;">'.$nofi.'</i>'  ?>
        </div>

        <input id="submit_btn"  type="submit" value="Đăng ký">
        <?php
            if($_SERVER['REQUEST_METHOD'] == "POST")
            {
                if($_POST['username_tb'] == "")
                {
                    echo '<script>
                    document.querySelector("#username").className = "error-validation";
                    </script>';
                }
                if($_POST['password_tb'] == "")
                {
                    echo '<script>
                    document.querySelector("#password").className = "error-validation";
                    </script>';
                }
                if($_POST['email_tb'] == "")
                {
                    echo '<script>
                    document.querySelector("#email").className = "error-validation";
                    </script>';
                }
                if($_POST['password_tb'] != $_POST['password_tb'])
                {
                    echo '<script>
                    document.querySelector("#repassword").className = "error-validation";
                    </script>';
                }
            }
        ?>
        <a href="login.php">Đã có tài khoản ?</a>
        
    </form>
</body>
</html>
