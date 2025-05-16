<?php
	include($_SERVER['DOCUMENT_ROOT'].'/BinhDinhNews/app/views/partials/header.php');
?>
<?php
$conn = new mysqli("localhost", "root", "", "BinhDinhNews");
if ($conn->connect_error) {
    die("Không kết nối được: " . $conn->connect_error);
}

function hienThiCoQuan($conn, $coquan) {
    // Giám đốc
    $sql_giamdoc = "SELECT * FROM coquanchuyenmon WHERE tencoquan = '$coquan' AND capbac = 1";
    $result_gd = $conn->query($sql_giamdoc);

    // Phó Giám đốc
    $sql_phogd = "SELECT * FROM coquanchuyenmon WHERE tencoquan = '$coquan' AND capbac = 2";
    $result_phogd = $conn->query($sql_phogd);

    // Cấp bậc 3 (Trưởng phòng, Phó phòng...)
    $sql_cap3 = "SELECT * FROM coquanchuyenmon WHERE tencoquan = '$coquan' AND capbac = 3";
    $result_cap3 = $conn->query($sql_cap3); // SỬA LỖI: Gán vào biến $result_cap3

    echo "<h3> $coquan </h3>";

    if ($result_gd->num_rows > 0) {
        echo '<div class="giamdoc-container">';
        while ($row = $result_gd->fetch_assoc()) {
            echo '<div class="item">
                        <img src="../images/imgChinhquyen/coquanchuyenmon/'.$row['hinhanh'].'" alt="'.$row['hoten'].'">
                        <label><b>'.$row['chucvu'].'</b><br>'.$row['hoten'].'</label>
                    </div>';
        }
        echo '</div>';
    } else if ($result_gd) {
        // Không có Giám đốc
    } else {
        echo "Lỗi truy vấn Giám đốc: " . $conn->error;
    }

    if ($result_phogd->num_rows > 0) {
        echo '<div class="phogiamdoc-container">';
        while ($row = $result_phogd->fetch_assoc()) {
            echo '<div class="item">
                        <img src="../images/imgChinhquyen/coquanchuyenmon/'.$row['hinhanh'].'" alt="'.$row['hoten'].'">
                        <label><b>'.$row['chucvu'].'</b><br>'.$row['hoten'].'</label>
                    </div>';
        }
        echo '</div>';
    } else if ($result_phogd) {
        // Không có Phó Giám đốc
    } else {
        echo "Lỗi truy vấn Phó Giám đốc: " . $conn->error;
    }

    if ($result_cap3->num_rows > 0) {
        echo '<div class="cap3-container">';
        while ($row = $result_cap3->fetch_assoc()) {
            echo '<div class="item">
                        <img src="../images/imgChinhquyen/coquanchuyenmon/'.$row['hinhanh'].'" alt="'.$row['hoten'].'">
                        <label><b>'.$row['chucvu'].'</b><br>'.$row['hoten'].'</label>
                    </div>';
        }
        echo '</div>';
    } else if ($result_cap3) {
        // Không có Cấp bậc 3
    } else {
        echo "Lỗi truy vấn Cấp 3: " . $conn->error;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/reset.css">
	<link rel="stylesheet" href="../css/footer-style.css">
	<link rel="stylesheet" href="../css/header-style.css">
    <style>
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 20px;
        }

        .giamdoc-container,
        .phogiamdoc-container,
        .cap3-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 30px;
            margin-bottom: 40px;
        }

        .item {
            width: 160px;
            text-align: center;
        }

        .item img {
            width: 100%;
            height: auto;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        .item label {
            display: block;
            margin-top: 10px;
            font-size: 14px;
        }
    </style>
</head>

<body>
    <div class="coquanchuyenmon-container">
        <?php
            hienThiCoQuan($conn, "Văn phòng UBND");
            hienThiCoQuan($conn, "Sở nội vụ");
            hienThiCoQuan($conn, "Sở tài chính");
            hienThiCoQuan($conn, "Sở xây dựng");
            hienThiCoQuan($conn, "Sở công thương");
            hienThiCoQuan($conn, "Sở Nông nghiệp và Môi trường");
            hienThiCoQuan($conn, "Sở Khoa học và Công nghệ");
            hienThiCoQuan($conn, "Sở Giáo dục và Đào tạo");
            hienThiCoQuan($conn, "Sở Văn hóa-Thể thao và Du lịch");
            hienThiCoQuan($conn, "Sở Y tế");
            hienThiCoQuan($conn, "Sở Tư pháp");
            hienThiCoQuan($conn, "Sở Ngoại vụ");
            hienThiCoQuan($conn, "Ban quản lý KKT");
            hienThiCoQuan($conn, "Thanh tra tỉnh");
            hienThiCoQuan($conn, "Sở dân tộc và tôn giáo");

        ?>
    </div>
</body>
</html>

<?php $conn->close(); ?>
<?php
	include($_SERVER['DOCUMENT_ROOT'].'/BinhDinhNews/app/views/partials/footer.php');
?>