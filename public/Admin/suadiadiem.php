<?php
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

    require_once("../../app/model/DiaDiemDLDAO.php");
    require_once("../../app/model/dulichDAO.php");

    $dddao = new DiaDiemDAO();
    $dlDAO = new dulichDAO();

    if (!isset($_GET['iddiadiem'])) {
        die("Thiếu ID địa điểm.");
    }

    $iddiadiem = $_GET['iddiadiem'];
    $result = $dddao->get_tung_DiaDiem($iddiadiem);
    $row_diaDiem = mysqli_fetch_array($result);
    mysqli_free_result($result);

    if (!$row_diaDiem) {
        die("Không tìm thấy địa điểm.");
    }

    // Đọc mô tả hiện có
    $txtPath = "../../app/dulich_data/" . $iddiadiem . ".txt";
    if (file_exists($txtPath)) {
        $mota_cu = file_get_contents($txtPath);
    } else {
        $mota_Cu = "";
    }



    // Xử lý khi nhấn "Lưu"
    if (isset($_POST['luu'])) {
        $ten_moi = $_POST['tendiadiem'];
        $diachi_moi = $_POST['diachi'];
        $loaihinhid_moi = $_POST['loaihinhid'];
        $mota_moi = $_POST['mota'];
        $hinhanh_cu = $row_diaDiem['HinhAnh'];//múc tên hình ảnh từ database
       


        if (!empty($_FILES['up_hinhanh_moi']['name'])) {
            
            $hinhanh_moi = $_FILES['up_hinhanh_moi']['name'];

            $uploadDir = "../../public/images/imgDuLich/" . $iddiadiem;
            
            $path = $uploadDir . "/" . basename($hinhanh_moi);
            unlink($uploadDir. "/" . $hinhanh_cu);
            move_uploaded_file($_FILES['up_hinhanh_moi']['tmp_name'], $path);
            //đẩy dữ liệu lên lại databasse
            $dddao->capnhat_diadiem($iddiadiem, $status, $ten_moi, $diachi_moi, $loaihinhid_moi, $hinhanh_moi);

        }
        else{
            $dddao->capnhat_diadiem($iddiadiem, $status, $ten_moi, $diachi_moi, $loaihinhid_moi, $hinhanh_cu);
        }


        // Ghi nếu mô tả mới khác mô tả cũ thì lưu lại vô file txt
        if( trim($mota_moi) != trim($mota_cu) ){
            file_put_contents($txtPath, $mota_moi);
        }
 
        header("Location: dsdiadiem.php");
        exit();
    }
    
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Sửa địa điểm</title>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/menu-admin.css">
    <link rel="stylesheet" href="../css/suadiadiem.css">
</head>
<body>
<div class="main-container">
    <div class="left-container">
        <?php include "../../app/views/left/menu-admin.php"; ?>
    </div>
    <div class="right-container">
        <div class="form-container">
            <h1>Sửa địa điểm du lịch</h1>

            <form method="POST" enctype="multipart/form-data">
                <input type="text" name="tendiadiem" value="<?php echo $row_diaDiem['TenDiaDiem']; ?>" required>
                <input type="text" name="diachi" value="<?php echo $row_diaDiem['DiaChi']; ?>" required>
                
                <!-- chọn loại hình id -->
                <select name="loaihinhid" required>
                    <?php
                        
                        $result = $dlDAO->get_tatca_loaihinh();
                        while ($row = mysqli_fetch_array($result)) {
                             
                            $selected = '';
                            // Nếu LoaiHinhID của dòng hiện tại trong danh sách loại hình du lịch)
                            //selected là khi nó trùng với giá trị LoaiHinhID của địa điểm đang được hiển thị
                            
                            if ($row['LoaiHinhID'] == $row_diaDiem['LoaiHinhID']) {
                                $selected = 'selected';
                            }

                            echo ' <option value=" '. $row['LoaiHinhID'] . '"   '. $selected. ' > '. $row['TenLoaiHinh'] .' </option> ';
                        }

                        // giải phóng bộ nhớ mà MySQLi đã sử dụng để lưu kết quả truy vấn
                        mysqli_free_result($result);
                        // $result là một "bộ lưu trữ" dữ liệu trả về từ truy vấn.
                    ?>
                </select>

                <div class="up_anh">
                    <label>Chọn ảnh mới (nếu muốn):</label>
                    <input type="file" name="up_hinhanh_moi">
                </div>

                <textarea name="mota" rows="8" required> <?php echo $mota_cu ?> </textarea>

                <button type="submit" name="luu">Lưu thay đổi</button>
            </form>

        </div>
    </div>
</div>
</body>
</html>
