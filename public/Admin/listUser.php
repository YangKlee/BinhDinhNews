<?php
    require "../../app/controller/loadsession.php"; // Thêm dấu ; vào cuối dòng này

    if ($_SESSION['role'] != 2) {
        header("Location: ./firewall.php");
    }
    require_once $_SERVER['DOCUMENT_ROOT'].'/BinhDinhNews/app/model/userDAO.php';
    $userDAO = new UserDAO();
    $userList = $userDAO->getAllUsers();  // Hàm này bạn cần định nghĩa trong UserDAO để lấy danh sách user
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/list-user-admin.css">
    <link rel="stylesheet" href="../css/menu-admin.css">
    <link rel="stylesheet" href="../css/reset.css">
    <title>Danh sách người dùng</title>
</head>
<body>
    <div class="main-container">
        <div class="left-container">
            <?php include "../../app/views/left/menu-admin.php"; ?>
        </div>
        <div class="right-container">
            <h1>Danh sách người dùng</h1>
            <a href="createUser.php" class="btn-create">Tạo tài khoản mới</a>
            <table class="user-table">
                <thead>
                    <tr>
                        <th>Ảnh đại diện</th>
                        <th>Username</th>
                        <th>Vai trò</th>
                        <th>Chức năng</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($userList)): ?>
                        <?php foreach ($userList as $user): ?>
                        <tr>
                            <td>
                                <img src="<?php echo !empty($user['user_img']) 
                                    ? "/BinhDinhNews/public/images/userAvatar/".$user['user_img']
                                    : "/BinhDinhNews/public/images/user.png"; ?>" 
                                    alt="Avatar" class="avatar-img">
                            </td>
                            <td><?php echo htmlspecialchars($user['UserName']); ?></td>
                            <td><?php echo ($user['Role'] == 2) ? 'Admin' : 'Nhà báo'; ?></td>
                            <td>
                                <a href="userinfo.php?user_id=<?php echo $user['UserID']; ?>" class="btn-view">Xem/Sửa</a>
                                <a href="deleteUser.php?user_id=<?php echo $user['UserID']; ?>" 
                                   class="btn-delete" onclick="return confirm('Bạn có chắc muốn xóa tài khoản này?');">Xóa</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr><td colspan="4">Không có người dùng nào.</td></tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
