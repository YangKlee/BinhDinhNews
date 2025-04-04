
<?php
    $isSuccess = false;
    $nofi = "";
    $displayNofi = 'none';
    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        require "../config/database.php";
        $db = new DatabaseConnection();
        $coon = $db->getConnection();
        if (!$coon->connect_error)
        {
            $statement = $coon->prepare("select username, email, password from UserData where (username = ? or email= ?) and password = ?");
            $statement->bind_param("sss", $_POST['username'], $_POST['username'], $_POST['password']);
            $statement->execute();
            $result = $statement->get_result();
            //$result = mysqli_query($coon ,$statement);  
            if ($result->num_rows != 0)
            {
                // login complete
                $nofi = "Đăng nhập thành công";
                $isSuccess = true;
                $displayNofi = "block";
                } 
            else
            {
                                // login complete
                $nofi = "Đăng nhập thất bại";
                $displayNofi = "block";
            }
        }
    }
?>
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
        <script>
            <?php
    
            ?>
        </script>
    </div>
    <?php 
        //include("./partials/mini-footer.php");
    ?>
</body>
</html>
