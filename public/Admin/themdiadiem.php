<?php
   //kiểm tra role
    require "../../app/controller/loadsession.php";
    if ($_SESSION['role'] < 1) {
        header("Location: ./firewall.php");
        exit();
    }
    
    if ($_SESSION['role'] == 1) {
        $status = 0;
    }

    if ($_SESSION['role'] == 2) {
        $status = 1;
    }

    include_once("../../app/model/DiaDiemDLDAO.php");

    //khi mà người dùng nhấn nút them
    if (isset($_POST['them'])) {
        $ten = $_POST['tendiadiem'];
        $diachi = $_POST['diachi'];
        $loaihinh = $_POST['loaihinh'];
        $mota = $_POST['mota'];
        //lấy tên file 
        $tenfile = $_FILES['tailenhinhanh']['name']; //name là tên file mình tải lên // taolenhinhanh là tên input types=file

        //thực hiện lệnh truy vẫn đưa file lên database
        $dddao = new DiaDiemDAO();
  
        $iddiadiem_moi = $dddao->them_DiaDiem_va_lay_ID($status, $ten, $diachi, $loaihinh, $tenfile);// idmoi trả về từ hàm thêm 

        // Tạo thư mục lưu ảnh
        $uploadDir = "../../public/images/imgDuLich/" . $iddiadiem_moi; // địa điểm chữ ảnh 
        if (!file_exists($uploadDir)) {//  kiểm tra thưc mục tồn tại chưa nếu chưa thì tạo thư mục mới và cấp quyền đọc ghi
            mkdir($uploadDir, 0777, true);
        }

        $path = $uploadDir . "/" . basename($tenfile);
        move_uploaded_file($_FILES['tailenhinhanh']['tmp_name'], $path);

        // Ghi nội dung mô tả vào file .txt
        $txtPath = "../../app/dulich_data/" . $iddiadiem_moi . ".txt";
        file_put_contents($txtPath, $mota);

        header("Location: dsdiadiem.php");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Thêm địa điểm</title>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/menu-admin.css">
    <link rel="stylesheet" href="../css/themdiadiem.css">

</head>
<body>
<div class="main-container">
    <div class="left-container">
        <?php include "../../app/views/left/menu-admin.php"; ?>
    </div>
    <div class="right-container">
        <div class="form-container">
            <h1>Thêm địa điểm du lịch</h1 >
			

            <form method="POST" enctype="multipart/form-data">
                <input type="text" name="tendiadiem" placeholder="Tên địa điểm" required>
                <input type="text" name="diachi" placeholder="Địa chỉ" required>
     
				<select name="loaihinh" required>
                    <?php
						require_once "../../app/model/dulichDAO.php";

						$dlDAO = new dulichDAO();
						$result = $dlDAO->get_tatca_loaihinh();
                        while($row = mysqli_fetch_array($result))
                        {
                            echo '<option value="'.$row['LoaiHinhID'].'">' . $row['TenLoaiHinh'] . '</option>';

                        }

                        mysqli_free_result($result);
                    ?>
               </select>


				 <div class="up_anh">
			       <label> Chọn ảnh: </label>	
                   <input type="file" name="tailenhinhanh" required>
				  </div> 
				<textarea name="mota" rows="8" placeholder="Giới thiệu chi tiết..." required></textarea>
                <button type="submit" name="them">Thêm địa điểm</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
