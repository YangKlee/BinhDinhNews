<?php
    // vì thư viện này đc load ở nhiều page, nên để tránh xung đột, chỉ start session khi nó chưa start
    // nó sẽ báo lỗi Warning: session_start(): Session already started
    // session_status trả về constant như sau
    // PHP_SESSION_DISABLED	Session bị tắt hoàn toàn trong cấu hình máy chủ
    // PHP_SESSION_NONE	Session đang bật nhưng chưa được bắt đầu
    // PHP_SESSION_ACTIVE	Session đã được bắt đầu và đang hoạt động
    if (session_status() === PHP_SESSION_NONE ) {
        session_start();
    }
     require_once __DIR__. "/../model/userDAO.php";
     $userDAO = new UserDAO();
    // nếu tồn tại session với tên UID, cái này dùng để lấy data từ csdl và load vào session khi có sự thay đổi về thông tin user trên database
    // các thông tin user sẽ thay đổi khi refest trang thay vì phải đăng xuất
    if(isset($_SESSION['UID']))
    {
        $data = $userDAO->getAuthorInfo($_SESSION['UID']);
        $_SESSION['role'] = $data['ROLE'];
        $_SESSION['username'] = $data['UserName'];
    }
    // dùng cho chức năng nhớ mật khẩu, sẽ lấy mã định danh phiên đăng nhập (k phải user id) từ cookies để load dữ liệu user vào session
    // mã định danh đc mã khóa
    else if(isset($_COOKIE['auth'])){
        { 
            $result = $userDAO->getUserByAuthCokkies($_COOKIE['auth']);

            if ($result && mysqli_num_rows($result) > 0) {
                $data = mysqli_fetch_assoc($result);
                $_SESSION['role'] = $data['ROLE'];
                $_SESSION['username'] = $data['UserName'];  
                $_SESSION['UID'] = $data['UserID'];
            } else {
                // Nếu không tìm thấy auth hợp lệ
                $_SESSION['username'] = "khach";
                $_SESSION['role'] = -1;
                $_SESSION['UID'] = null;
            }
                
        }

    }
    // dùng user ảo khi chưa đăng nhập
    else{
        $_SESSION['username'] = "khach";
        $_SESSION['role'] = -1;
        $_SESSION['UID'] = null;
    }
?>