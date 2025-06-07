<?php
    // hủy cookies bằng cách chỉnh sửa thời gian hết hạn của nó về âm
    setcookie("auth", "", time() - 3600, "/");
    // dùng để bắt đầu (hoặc tiếp tục) một session đang có, phải có start để thao tác bất cứ thứ gì liên quan đến session
    session_start();
    // hủy session
    session_destroy();
    header("Location: ../../public/index.php");
    exit();
?>