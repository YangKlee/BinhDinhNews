<?php 
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        require_once("../app/model/userDAO.php");
        require_once("../app/model/user.php");
        $newUser = new UserDAO();
        $isSuccess = $newUser->addUserAccount(new User($_POST['username_tb'], 
        $_POST['password_tb'],
        $_POST['fullname_tb'],
        $_POST['email_tb'], null, null));

        if($isSuccess)
        {
            echo "<script> alert('Dang ky thanh cong') </script>";
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
        <label for="username">Tên đăng nhập</label>
        <input type="text" id="username" name="username_tb">
        <label for="username">Email:</label>
        <input type="text" id="email" name="email_tb">
        <label for="username">Họ và tên:</label>
        <input type="text"  id="fullname" name="fullname_tb">
        <label for="password">Mật khẩu</label>
        <input type="password"  id="password" name="password_tb">
        <label for="password">Xác nhận mật khẩu</label>
        <input type="password" id="password" name="Repassword_tb">

        <input id="submit_btn"  type="submit" value="Đăng ký">
        
        <a href="login.php">Đã có tài khoản ?</a>
        
    </form>
</body>
</html>
