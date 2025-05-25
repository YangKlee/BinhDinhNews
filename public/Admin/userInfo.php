<?php
    require "../../app/controller/loadsession.php"

?>
<?php
    if($_SESSION['role'] < 1)
    {
        header("Location: ./firewall.php");    
    }
?>
<?php
   
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        require_once $_SERVER['DOCUMENT_ROOT'].'/BinhDinhNews/app/model/userDAO.php';
        require_once $_SERVER['DOCUMENT_ROOT'].'/BinhDinhNews/app/controller/Upload.php';
        $userDAO = new UserDAO();
        $fileUpload = new Upload();
        if(isset($_FILES['avatar_img']) && !empty($_FILES['avatar_img']))
        {
            $filenameDir =  $fileUpload->UploadImageUserAvatar($_SESSION['UID'], $_FILES['avatar_img']);
            $updateImageStatus = $userDAO->updateAuthorAvatar($_SESSION['UID'], $filenameDir);
        }
        else{
            $updateImageStatus= true;
        }

        $updateInfoStatus = $userDAO->updateAuthorInfo($_SESSION['UID'],
         $_POST['fullname_tx'], $_POST['phone_tx'], 
         $_POST['email_tx'], $_POST['cccd_tx'], 
         $_POST['adias_tx'], $_POST['organ_tx'], $_POST['role_select']);
        
        
        if($updateImageStatus && $updateInfoStatus){
                    echo '    <script>
                alert("Cập nhật thành công")
            </script>';
        }
        else{
                    echo '    <script>
                alert("Cập nhật thất bại ")
            </script>';
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
    <title>Document</title>
</head>
<body>

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
            <form action="#" method="post" class="form-user-info" enctype="multipart/form-data">
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
                    <input type="text" class="txb txb-email" name="email_tx" id="" value="<?php echo $result['Email'] ?>">
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
                    if($_SESSION['role'] != 2)
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
                <div class="avatar-warpper">
                    <label for="">Ảnh đại diện: </label>
                    <img src="<?php echo !empty($result['user_img']) ? "/BinhDinhNews/public/images/userAvatar/". $result['user_img'] : "/BinhDinhNews/public/images/user.png"; ?>" alt="Ảnh đại diện">
                    <input type="file" class="txb txb-avatar" name="avatar_img" id="" >
                </div>
                <button type="button" id="edit_btn">Sửa thông tin</button>
                <input type="submit" name="btn-submit" id="submit_btn" value="Cập nhật thông tin">
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
</body>
</html>