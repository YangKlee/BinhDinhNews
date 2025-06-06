<?php
// Luôn khởi động session ở đầu file

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Xóa session OTP và email nếu truy cập trực tiếp vào trang mà không qua form
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    unset($_SESSION['otp']);
    unset($_SESSION['email']);
}

require_once '../../../app/controller/mail-sender.php';
require_once '../../../app/model/userDAO.php';

// Xử lý gửi OTP qua email
if (isset($_POST['email-btn'])) {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    
    // Kiểm tra định dạng email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo '<div class="error">Email không hợp lệ!</div>';
    } else {
        // Kiểm tra email có tồn tại trong database
        $userDAO = new UserDAO();
        if (!$userDAO->isEmailExists($email)) {
            echo '<div class="error">Email không tồn tại trong hệ thống!</div>';
        } else {
            // Tạo OTP an toàn
            $otp = random_int(100000, 999999);
            $_SESSION['otp'] = $otp;
            $_SESSION['email'] = $email;
            $_SESSION['otp_expiry'] = time() + 300; // OTP hết hạn sau 5 phút

            // Gửi OTP qua email
            try {
                sendOTP($email, $otp);
                $_SESSION['otp_sent'] = true; // Đánh dấu OTP đã gửi
            } catch (Exception $e) {
                echo '<div class="error">Lỗi khi gửi email: ' . htmlspecialchars($e->getMessage()) . '</div>';
                unset($_SESSION['otp']);
                unset($_SESSION['email']);
                unset($_SESSION['otp_sent']);
            }
        }
    }
}

// Xử lý xác minh OTP
if (isset($_POST['verify-btn'])) {
    $input_otp = trim($_POST['otp']);
    // Kiểm tra OTP và thời gian hết hạn
    if (!isset($_SESSION['otp']) || !isset($_SESSION['email'])) {
        echo '<div class="error">Phiên OTP đã hết hạn hoặc không tồn tại!</div>';
        unset($_SESSION['otp_sent']);
    } elseif (time() > $_SESSION['otp_expiry']) {
        echo '<div class="error">Mã OTP đã hết hạn!</div>';
        unset($_SESSION['otp']);
        unset($_SESSION['email']);
        unset($_SESSION['otp_sent']);
    } elseif ($input_otp === (string)$_SESSION['otp']) {
        unset($_SESSION['otp']);
        unset($_SESSION['otp_expiry']);
        $_SESSION['reset_password'] = true; // Đánh dấu đã xác minh OTP
    } else {
        echo '<div class="error">Mã OTP không hợp lệ!</div>';
    }
}

if (isset($_POST['reset-btn'])) {
    $new_password = $_POST['new-password'] ?? '';
    $email = $_POST['email'] ?? '';
    require_once '../../../app/model/userDAO.php';
    $userDAO = new UserDAO();
    if($userDAO->updateUserPasswordByEmail($email, $new_password)){
        unset($_SESSION['reset_password']);
        unset($_SESSION['email']);
        unset($_SESSION['otp_sent']);
        echo "<script> alert('Đặt lại mật khẩu thành công');</script>";
        header("Location: login.php");
        exit();
    } else {
        echo '<div class="error">Đặt lại mật khẩu không thành công. Vui lòng thử lại.</div>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/forgot-password-style.css">
    <link rel="icon" href="../../images/logo.webp" type="image/x-icon">
    <link rel="stylesheet" href="../../css/mini-footer-style.css">
    <title>Quên mật khẩu</title>
</head>
<body>
    <?php if (!isset($_SESSION['otp_sent'])): ?>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
            <h3>Quên mật khẩu</h3>
            <label for="email">Nhập email</label>
            <input type="email" placeholder="Nhập email để nhận mã OTP" id="email" name="email" pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$" title="Chưa đúng định dạng" required>
            <input type="submit" value="Gửi" id="confirm-btn" name="email-btn">
            <a href="signin.php">Chưa có tài khoản?</a>
            <a href="login.php">Quay lại trang đăng nhập</a>
        </form>
    <?php elseif (!isset($_SESSION['reset_password']) && isset($_SESSION['otp_sent'])): ?>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
            <h3>Nhập mã OTP</h3>
            <label for="otp">Mã OTP đã gửi đến <?php echo htmlspecialchars($_SESSION['email']); ?></label>
            <input type="text" placeholder="Nhập mã OTP" id="otp" name="otp" required>
            <input type="submit" value="Xác nhận" id="confirm-btn" name="verify-btn" pattern="\d{6}" title="Mã OTP gồm 6 chữ số" maxlength="6">
            <a href="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">Thử email khác</a>
            <a href="login.php">Quay lại trang đăng nhập</a>
        </form>
    <?php elseif (isset($_SESSION['reset_password'])): ?>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
            <h3>Đặt lại mật khẩu</h3>
            <input type="hidden" name="email" value="<?php echo htmlspecialchars($_SESSION['email']); ?>">
            <label for="new-password">Mật khẩu mới</label>
            <input type="password" placeholder="Nhập mật khẩu mới" id="new-password" name="new-password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Mật khẩu có ít nhất 8 kí tự và 1 chữ hoa và 1 chữ thường" required>
            <input type="submit" value="Đặt lại mật khẩu" id="confirm-btn" name="reset-btn">
            <a href="login.php">Quay lại trang đăng nhập</a>
        </form>
    <?php endif; ?>
    <?php 
        include("../../../app/views/partials/mini-footer.php");
    ?>
</body>
</html>