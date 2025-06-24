<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .nav-quickbar{
            display: none;
            position: sticky;
            top: 0px;
            width: 100%;
            height: 40px;   
            background-color: rgba(41, 104, 187, 0.9);
            backdrop-filter: blur(10px);

            justify-content: space-between;
            align-items: center;
            padding: 0px 20px;
        }
        .nav-quickbar button{
            background-color: white;
            padding: 10px;
            border: 1px solid white;
            border-radius: 10px;
        }
        .user-logined-info-phone label{
            color: white;
            font-size: 1.3rem;
            font-weight: bold;
            padding-right: 10px;
        }
        @media (max-width: 1000px)
        {
            .nav-quickbar{
                display: flex;
            }
        }
    </style>

</head>
<body>
                <div class="nav-quickbar">
                    <button id="open-popup-nav"><i class="fa-solid fa-bars"></i></button>
                    <?php 
                        if($_SESSION['role'] > 0):
                    ?>
                    <div class="user-logined-info-phone">
                        <label id="username-label" for=""><?php echo $_SESSION['username'] ?></label>
                        <a href="\BinhDinhNews\app\controller\dangxuat.php"> <button type="button" id="btn-login"> Đăng xuất </button></a>

                    </div>
                    <?php
                        else:
                    ?>
                    <a href="\BinhDinhNews\public\pages\login-signin-pass\login.php"> <button type="button" id="btn-login"> Đăng nhập </button></a>
                    <?php endif; ?>
                </div>
                <!-- chôm code từ cái nav-phone nên format hơi xấu -->  

</body>
</html>
