<?php
require_once __DIR__ . '/../../app/config/database.php';
require_once __DIR__ . '/../../app/model/userDAO.php';

$conn = DatabaseConnection::getConnection();
$userDAO = new UserDAO();
$userDAO->setConnection($conn);          

$error = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $role = intval($_POST['role']);
    $password = $_POST['password_tb'];
    $repassword = $_POST['repassword_tb'];

    $fullname = trim($_POST['fullname']);
    $phone = trim($_POST['phone']);
    $alias = trim($_POST['alias']);
    $organization = trim($_POST['organization']);
    $cccd = trim($_POST['cccd']);

    $img = null;

    // Kiểm tra username/email tồn tại
    if ($userDAO->isUsernameOrEmailExists($username, $email)) {
        $error = "Tên đăng nhập hoặc email đã tồn tại.";
    } elseif ($password !== $repassword) {
        $error = "Mật khẩu và xác nhận mật khẩu không khớp.";
    } else {
        // Hash mật khẩu
        $hashedPassword = hash( "sha256",$password);

        // Xử lý ảnh đại diện
        if (isset($_FILES['user_img']) && $_FILES['user_img']['error'] === 0) {
            $uploadDir = "../../public/images/userAvatar/";
            $imgName = basename($_FILES['user_img']['name']);
            move_uploaded_file($_FILES['user_img']['tmp_name'], $uploadDir . $imgName);
            $img = $imgName;
        }

        // Thêm user vào database
        if ($userDAO->createUser($username, $email, $role, $hashedPassword, $img, $fullname, $phone, $alias, $organization, $cccd)) {
            header("Location: listUser.php?message=created");
            exit();
        } else {
            $error = "Tạo tài khoản thất bại.";
        }
    }

    DatabaseConnection::closeConnection($conn);
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Tạo tài khoản</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/list-user-admin.css">
    <link rel="stylesheet" href="../css/menu-admin.css">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../../../BinhDinhNews/public/css/create-user.css">
</head>
<body>
<div class="main-container">
    <div class="left-container">
        <?php include "../../app/views/left/menu-admin.php"; ?>
    </div>
    <div class="right-container">
        <h1 class="create-user-title">Tạo tài khoản mới</h1>
        <?php if ($error): ?>
            <p class="create-user-error"><?php echo htmlspecialchars($error); ?></p>
        <?php endif; ?>
        <form method="POST" enctype="multipart/form-data" class="create-user-form">
            <div class="create-user-field">
                <label for="username">Tên đăng nhập:</label>
                <input type="text" id="username" name="username" required>
            </div>

            <div class="create-user-field">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="create-user-field">
                <label for="fullname">Họ và tên:</label>
                <input type="text" id="fullname" name="fullname" required>
            </div>

            <div class="create-user-field">
                <label for="phone">Số điện thoại:</label>
                <input type="text" id="phone" name="phone">
            </div>

            <div class="create-user-field">
                <label for="alias">Bí danh:</label>
                <input type="text" id="alias" name="alias">
            </div>

            <div class="create-user-field">
                <label for="organization">Tổ chức:</label>
                <input type="text" id="organization" name="organization">
            </div>

            <div class="create-user-field">
                <label for="cccd">Số CCCD:</label>
                <input type="text" id="cccd" name="cccd">
            </div>

            <div class="create-user-field">
                <label for="role">Vai trò:</label>
                <select id="role" name="role">
                    <option value="1">Nhà báo</option>
                    <option value="2">Admin</option>
                </select>
            </div>

            <div class="create-user-field">
                <label for="user_img">Ảnh đại diện:</label>
                <input type="file" id="user_img" name="user_img">
            </div>

            <div class="create-user-field">
                <label for="password_tb">Mật khẩu:</label>
                <input type="password" id="password_tb" name="password_tb" required>
            </div>

            <div class="create-user-field">
                <label for="repassword_tb">Xác nhận mật khẩu:</label>
                <input type="password" id="repassword_tb" name="repassword_tb" required>
            </div>

            <div class="create-user-actions">
                <input type="submit" value="Tạo tài khoản" class="create-user-button">
            </div>
        </form>
    </div>
</div>
</body>
</html>
