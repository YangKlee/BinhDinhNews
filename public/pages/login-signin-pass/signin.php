<?php 
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        require "../../../app/config/database.php";
        $db = new DatabaseConnection();
        $conn = $db->getConnection();

        $username = trim($_POST['username_tb']);
        $email = trim($_POST['email_tb']);
        $password = $_POST['password_tb'];

        // Kiểm tra trùng username hoặc email
        $checkQuery = "SELECT * FROM UserData WHERE UserName = ? OR Email = ?";
        $checkStmt = mysqli_prepare($conn, $checkQuery);
        mysqli_stmt_bind_param($checkStmt, "ss", $username, $email);
        mysqli_stmt_execute($checkStmt);
        $result = mysqli_stmt_get_result($checkStmt);

        if(mysqli_num_rows($result) > 0) {
            echo '<div class="error">Tên tài khoản hoặc email đã tồn tại</div>';
        } else {
            // Hash password an toàn hơn
            $hashedPassword = hash("sha256", $password);
            $query= "INSERT INTO UserData(UserName,PassWord,Email,ROLE) VALUES(?, ?, ?, 0)";
            $sttm = mysqli_prepare($conn,$query);
            mysqli_stmt_bind_param($sttm, "sss", $username, $hashedPassword, $email );
            if(mysqli_stmt_execute($sttm)){
                require_once '../../../app/controller/mail-sender.php';
                sendEmail($email, "Chào mừng bạn đến với BinhDinhNews", "Tài khoản của bạn đã được đăng ký thành công với tên đăng nhập: $username. Hãy đăng nhập để trải nghiệm dịch vụ của chúng tôi.");
                echo '<script>alert("Đăng ký thành công"); window.location.href="login.php";</script>';
                exit();
            } else {
                echo '<script>alert("Đăng kí thất bại");</script>';
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Trang Đăng Ký </title>
    <link rel="stylesheet" href="../../css/signin-style.css">
    <link rel="stylesheet" href="../../css/reset.css">
    <link rel="stylesheet" href="../../css/mini-footer-style.css">
    <link rel="icon" href="../../images/logo.webp" type="image/x-icon">
    <script src="../../scripts/hide-password.js"></script>
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">

        <h3>Đăng ký</h3>
        <div class="username-warper">
            <label for="username">Tên đăng nhập <span style="color: red;"> *</span></label>
            <input type="text" id="username"  name="username_tb"  pattern="[a-zA-Z0-9_]{4,20}" title="Tên đăng nhập từ 4-20 ký tự, chỉ chứa chữ cái, số và dấu gạch dưới" required>
        </div>
        <div class="email-warper">
            <label for="username">Email: <span style="color: red;"> *</span></label>
            <input type="email" id="email" name="email_tb" pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$" title="Chưa đúng định dạng" required>
        </div>
        <div class="password-warper">
            <label for="password">Mật khẩu <span style="color: red;"> *</span></label>
            <div class="input-icon-wrapper">
                <input type="password"  id="password" name="password_tb" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Mật khẩu có ít nhất 8 kí tự và 1 chữ hoa và 1 chữ thường" required oncopy="return false;" onpaste="return false;" oncut="return false;">
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
        <div class="repassword-warper">
            <label for="password">Xác nhận mật khẩu <span style="color: red;"> *</span></label>
            <div class="input-icon-wrapper">
                <input type="password" id="repassword" name="repassword_tb" required oncopy="return false;" onpaste="return false;" oncut="return false;">
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
            <span id="passwordMatchError" style="color: red">Mật khẩu xác nhận không khớp!</span>
        </div>

        <input id="submit_btn"  type="submit" value="Đăng ký">
        <a href="login.php">Đã có tài khoản ?</a>
    </form>
    <script>
    const password = document.getElementById('password');
    const repassword = document.getElementById('repassword');
    const error = document.getElementById('passwordMatchError');
    const form = document.querySelector('form'); // Giả sử các input nằm trong thẻ <form>

    function checkPasswordMatch() {
        if (password.value !== repassword.value) {
            error.style.display = 'block';
            repassword.setCustomValidity('Mật khẩu xác nhận không khớp');
        } else {
            error.style.display = 'none';
            repassword.setCustomValidity('');
        }
    }

    // Kiểm tra khi người dùng nhập vào trường xác nhận mật khẩu
    repassword.addEventListener('input', checkPasswordMatch);

    // Kiểm tra khi gửi form
    form.addEventListener('submit', (e) => {
        checkPasswordMatch();
        if (password.value !== repassword.value) {
            e.preventDefault(); // Ngăn gửi form nếu mật khẩu không khớp
        }
    });
    </script>
    <?php 
        include("../../../app/views/partials/mini-footer.php");
    ?>
</body>
</html>
