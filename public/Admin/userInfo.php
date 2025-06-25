<?php
    require "../../app/controller/loadsession.php";

    if($_SESSION['role'] < 1)
    {
        header("Location: ./firewall.php");    
        exit;
    }

    // var_dump($_SESSION);
    // exit;
   
    if($_SERVER['REQUEST_METHOD'] == "POST") {
        // Nếu là đổi mật khẩu
        if (isset($_POST['old_password_tx']) && isset($_POST['new_password_tx']) && isset($_POST['re_new_password_tx'])) {
            require_once $_SERVER['DOCUMENT_ROOT'].'/BinhDinhNews/app/model/userDAO.php';
            $userDAO = new UserDAO();
            $oldPassword = $_POST['old_password_tx'];
            $newPassword = $_POST['new_password_tx'];
            $reNewPassword = $_POST['re_new_password_tx'];

            if ($newPassword !== $reNewPassword) {
                echo '<script>alert("Mật khẩu mới và xác nhận mật khẩu không khớp!");</script>';
            } else if ($userDAO->checkPassword($_SESSION['UID'], $oldPassword) === false) {
                echo '<script>alert("Mật khẩu cũ không đúng!");</script>';
            } else {
                $userDAO->updatePasswordById($_SESSION['UID'], $newPassword);
                echo '<script>alert("Mật khẩu đã được cập nhật thành công!");</script>';
            }
        }
        // Nếu là cập nhật thông tin user
        else if (
            isset($_POST['uid_tx']) && isset($_POST['fullname_tx']) && isset($_POST['phone_tx']) &&
            isset($_POST['email_tx']) && isset($_POST['cccd_tx']) && isset($_POST['adias_tx']) &&
            isset($_POST['organ_tx']) && isset($_POST['role_select'])
        ) {
            require_once $_SERVER['DOCUMENT_ROOT'].'/BinhDinhNews/app/model/userDAO.php';
            require_once $_SERVER['DOCUMENT_ROOT'].'/BinhDinhNews/app/controller/Upload.php';
            $userDAO = new UserDAO();
            $fileUpload = new Upload();

            if ($userDAO->isEmailExists($_POST['email_tx']) 
                && $userDAO->getUserByEmail($_POST['email_tx'])['UserID'] != $_POST['uid_tx']) {

                echo '<script>
                    alert("Email đã tồn tại và thuộc về người dùng khác!");
                    window.history.back();
                </script>';
                exit; 
            }
            if(isset($_FILES['avatar_img']) && !empty($_FILES['avatar_img']['name']))
            {
                $filenameDir =  $fileUpload->UploadImageUserAvatar($_POST['uid_tx'], $_FILES['avatar_img']);
                $updateImageStatus = $userDAO->updateAuthorAvatar($_POST['uid_tx'], $filenameDir);
            }
            else{
                $updateImageStatus= true;
            }

            $updateInfoStatus = $userDAO->updateAuthorInfo(
                $_POST['uid_tx'],
                $_POST['fullname_tx'],
                $_POST['phone_tx'],
                $_POST['email_tx'],
                $_POST['cccd_tx'],
                $_POST['adias_tx'],
                $_POST['organ_tx'],
                $_POST['role_select']
            );
            
            if($updateImageStatus && $updateInfoStatus){
                echo '<script>alert("Cập nhật thành công")</script>';
            }
            else{
                echo '<script>alert("Cập nhật thất bại ")</script>';
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/info-user-admin.css">
    <link rel="stylesheet" href="../css/menu-admin.css">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="shortcut icon" href="../../../../../BinhDinhNews/public/images/logo.webp" type="image/x-icon">
        <link rel="stylesheet" href="../css/reponsitive/main-admin.css">
    <title>Thêm bài báo</title>
</head>

<body>
    <?php
        include "../../app/views/partials/phone-header-admin.php";
    ?>
    <div class="main-container">
        <div class="left-container">
            <?php
                include "../../app/views/left/menu-admin.php";
            ?>
        </div>
        <div class="right-container">
            <?php
                require_once $_SERVER['DOCUMENT_ROOT'].'/BinhDinhNews/app/model/userDAO.php';
                $userDAO = new UserDAO();
                if(isset($_GET['user_id']))
                {
                        $user_id = $_GET['user_id'];
                    if($_SESSION['role'] !=2)
                    {
                        header("Location: ./firewall.php");    
                        exit;
                    }
                    $result = $userDAO->getAuthorInfo($_GET['user_id']);
                    if($result == 0)
                    {
                        echo "Không tìm thấy user";
                        exit;
                    }
                }
                else if(isset($_SESSION['UID']))
                {

                    $result = $userDAO->getAuthorInfo($_SESSION['UID']);
                    
                } 
                else{
                    exit();
                }           
            ?>
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" class="form-user-info" enctype="multipart/form-data">
                <?php
                    if(isset($_GET['user_id']))
                    {
                        echo '<input type="text" name="uid_tx" hidden value="'.$_GET['user_id'].'">';
                    }
                    else if(isset($_SESSION['UID'])){
                        echo '<input type="text" name="uid_tx" hidden value="'.$_SESSION['UID'].'">';
                    }

                ?>
                <h1 style="text-align: center;">THÔNG TIN NGƯỜI DÙNG</h1>    
                <div class="form-input-warpper">
                    
                    <div class="form-basic-info">
                        <div class="user-name-warpper">
                            <label for="">Username: </label>
                            <input type="text" class="txb txb-username" type="text" name="username_tx"  id="username_txb" value="<?php echo $result['UserName'] ?>">
                        </div>
                        <div class="full-name-warpper">
                            <label for="">Họ và tên: </label>
                            <input type="text" class="txb txb-fullname" name="fullname_tx" id="" value="<?php echo $result['FullName'] ?>">
                        </div>
                        <div class="email-warpper">
                            <label for="">Email: </label>
                            <input type="text" class="txb txb-email" name="email_tx" id="email_txb" value="<?php echo $result['Email'] ?>">
                        </div>
                        <div class="cccd-warpper">
                            <label for="">Số CCCD: </label>
                            <input type="text" class="txb txb-cccd" name="cccd_tx" id="" value="<?php echo $result['CCCD'] ?>">
                        </div>
                        <div class="phone-warpper">
                            <label for="">Số điện thoại: </label>
                            <input type="text" class="txb txb-phone" name="phone_tx" id="" value="<?php echo $result['Phone'] ?> ">
                        </div>
                        <div class="adias-warpper">
                            <label for="">Bí danh (tênhiển thị khi đăng bài): </label>
                            <input  type="text" class="txb txb-adias" name="adias_tx" id="" value="<?php echo $result['Alias'] ?>">
                        </div>
                        <div class="organ-warpper">
                            <label for="">Tổ chức: </label>
                            <input type="text" class="txb txb-organ" name="organ_tx" id="" value="<?php echo $result['Organization'] ?>">
                        </div>
                        <div class="role-warpper"> 
                                    <label for="">Vai trò:</label>
                                    <select name="role_select" class="txb" id="role_select" >
                                        <option value="1">Tác giả</option >
                                        <option value="2">Admin</option>
                                    </select>
                        </div>

                        <?php
                            if(!isset($_GET['user_id']))
                            {
                                echo ' <script>
                                    document.querySelector("#func3").classList.add("active");
                                </script>';
                            }
                            if($_SESSION['role'] != 2 || !isset($_GET['user_id']))
                            {
                                echo "<script> document.querySelector('.role-warpper').classList.add('hidden') </script>";
                            }

                            if($result['ROLE'] == 1)
                            {
                                echo "<script> document.querySelector('#role_select').value = 1 </script>";
                            }
                            else if($result['ROLE'] == 2)
                            {
                                echo "<script> document.querySelector('#role_select').value = 2 </script>";
                            }
                        ?>
                    </div>
                    <div class="avatar-warpper">
                        <label for="">Ảnh đại diện: </label>
                        <img src="<?php echo !empty($result['user_img']) ? "/BinhDinhNews/public/images/userAvatar/". $result['user_img'] : "/BinhDinhNews/public/images/user.png"; ?>" alt="Ảnh đại diện">
                        <input type="file" class="txb txb-avatar" name="avatar_img" id="" >

                        <div class="button-wrapper">
                        <button type="button" id="edit_btn"><i class="fa-solid fa-pen-to-square"></i>Sửa thông tin</button>
                        <button type="submit" id="submit_btn"><i class="fa-solid fa-check"></i>Cập nhật</button>
                        <button type="button" id="edit_password" ><i class="fa-solid fa-pen-to-square"></i>Thay đổi mật khẩu</button>
                        
                        </div>
                    </div>

                </div>
            </form>
        </div>
        <script>
            let bt_submit = document.querySelector("#submit_btn");
            bt_submit.style.display = "None";
            let txb_input = document.querySelectorAll(".txb")
            for (let i = 0; i < txb_input.length; i++)
            {
                txb_input[i].setAttribute("disabled", true);
            }
            let txt_modify = document.querySelector("#edit_btn");
            txt_modify.addEventListener("click", function(e){
                for (let i = 0; i < txb_input.length; i++)
                {
                    
                    txb_input[i].removeAttribute("disabled", true)
                }
                document.getElementById("username_txb").setAttribute("disabled", true);
                
                bt_submit.style.display = "block";
                txt_modify.style.display = "none";
            });
        </script>
    </div>
    <div class="re-password-overlay">
        <div class="re-password-form">
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="form-re-password">
                <h1>ĐỔI MẬT KHẨU</h1>
                <div class="form-input-re-password-warpper">
                    <div class="old-password-warpper">
                        <label for="">Mật khẩu cũ: </label>
                        <input type="password" class="txb txb-old-password" name="old_password_tx" id=""  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Mật khẩu có ít nhất 8 kí tự và ít nhất 1 chữ hoa và ít nhất 1 chữ thường" required>
                    </div>
                    <div class="new-password-warpper">
                        <label for="">Mật khẩu mới: </label>
                        <input type="password" class="txb txb-new-password" name="new_password_tx" id=""  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Mật khẩu có ít nhất 8 kí tự và ít nhất 1 chữ hoa và ít nhất 1 chữ thường" required>
                    </div>
                    <div class="re-new-password-warpper">
                        <label for="">Nhập lại mật khẩu mới: </label>
                        <input type="password" class="txb txb-re-new-password" name="re_new_password_tx" id=""  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Mật khẩu có ít nhất 8 kí tự và ít nhất 1 chữ hoa và ít nhất 1 chữ thường" required>
                    </div>
                    <div class="button-wrapper">
                        <button type="submit" class="btn btn-re-password">Cập nhật</button>
                        <button type="button" class="btn btn-close-re-password">Đóng</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script>
        let re_password_overlay = document.querySelector(".re-password-overlay");
        let btn_edit_password = document.querySelector("#edit_password");
        btn_edit_password.addEventListener("click", function(e){
            re_password_overlay.classList.add("active");
        });
        let btn_close_re_password = document.querySelector(".btn-close-re-password");
        btn_close_re_password.addEventListener("click", function(e){
            re_password_overlay.classList.remove("active");
        });
    </script>
</body>
</html>