<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Trang Đăng Nhập </title>
    <link rel="stylesheet" href="../../public/css/login-style.css">
    <link rel="stylesheet" href="../../public/css/mini-footer-style.css">
</head>
<body>
    <form>
        <h3>Đăng nhập</h3>

        <label for="username">Tên đăng nhập</label>
        <input type="text" placeholder="Email hoặc Tên Đăng Nhập" id="username">

        <label for="password">Mật khẩu</label>
        <input type="password" placeholder="Mật khẩu" id="password">

        <button>Đăng nhập</button>
        <a href="signin.php">Chưa có tài khoản ?</a>
        <a href="#">Quên mật khẩu ?</a>
        
    </form>
    <?php 
        include("./partials/mini-footer.php");
    ?>
</body>
</html>
