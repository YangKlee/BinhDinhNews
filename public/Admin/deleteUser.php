<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

session_start();

// Kiểm tra quyền admin
if (!isset($_SESSION['role']) || $_SESSION['role'] != 2) {
    header("Location: ./firewall.php");
    exit;
}

// Kiểm tra user_id được gửi qua GET
if (!isset($_GET['user_id']) || !is_numeric($_GET['user_id'])) {
    die("ID không hợp lệ.");
}

$userId = (int) $_GET['user_id'];

// Kết nối database
$conn = new mysqli("localhost", "root", "", "binhdinhnews");
if ($conn->connect_error) {
    die("Lỗi kết nối CSDL: " . $conn->connect_error);
}

// Xóa người dùng theo UserID
$sql = "DELETE FROM userdata WHERE UserID = ?";
$stmt = $conn->prepare($sql);

if ($stmt === false) {
    die("Prepare failed: " . $conn->error);
}

$stmt->bind_param("i", $userId);
if ($stmt->execute()) {
    echo "<script>
        alert('Xóa người dùng thành công!');
        window.location.href = 'listUser.php';
    </script>";
} else {
    echo "Lỗi khi xóa: " . $stmt->error;
}
$stmt->close();
$conn->close();
?>
