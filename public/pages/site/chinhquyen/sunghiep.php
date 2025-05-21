<?php include($_SERVER['DOCUMENT_ROOT'].'/BinhDinhNews/app/views/partials/header.php'); ?>

<?php
$conn = new mysqli("localhost", "root", "", "BinhDinhNews");
if ($conn->connect_error) {
    die("Không kết nối được: " . $conn->connect_error);
}

function hienThisunghiep($conn, $sunghiep) {
    // Chủ tịch
    $sql_chutich = "SELECT * FROM donvisunghiep WHERE sunghiep = '$sunghiep' AND capbac = 1";
    $result_ct = $conn->query($sql_chutich);

    // Phó Chủ tịch
    $sql_pho = "SELECT * FROM donvisunghiep WHERE sunghiep = '$sunghiep' AND capbac = 2";
    $result_pho = $conn->query($sql_pho);

    echo "<h3> {$sunghiep} </h3> ";

if ($result_ct->num_rows > 0) {
    echo '<div class="chutich-container">';
    while ($row = $result_ct->fetch_assoc()) {
        echo '<div class="item">
                <img src="../../../images/imgChinhquyen/donvisunghiep/'.$row['anh'].'" alt="'.$row['ten'].'">
                <label><b>'.$row['chucvu'].'</b><br>'.$row['ten'].'</label>
              </div>';
    }
    echo '</div>';
}

if ($result_pho->num_rows > 0) {
    echo '<div class="pho-container">';
    while ($row = $result_pho->fetch_assoc()) {
        echo '<div class="item">
                <img src="../../../images/imgChinhquyen/donvisunghiep/'.$row['anh'].'" alt="'.$row['ten'].'">
                <label><b>'.$row['chucvu'].'</b><br>'.$row['ten'].'</label>
              </div>';
    }
    echo '</div>';
}

}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
            <link rel="stylesheet" href="../../../../public/css/reset.css">
	<link rel="stylesheet" href="../../../../public/css/footer-style.css">
	<link rel="stylesheet" href="../../../../public/css/header-style.css">
<style>

    .container {
        padding: 0 20px;
        box-sizing: border-box;
    }

    .container h3 {
        text-align: left;
        margin: 20px 0;
        padding-left: 10px; 
        font-size: 22px;
    }

    .chutich-container,
    .pho-container {
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
        font-size: 18px;
    }

</style>

</head>
<body>
    <div class="container">
        <?php
        hienThisunghiep($conn, sunghiep: "BAN QUẢN LÝ DỰ ÁN CÁC CÔNG TRÌNH GIAO THÔNG VÀ DÂN DỤNG");
        hienThisunghiep($conn, sunghiep: "TRUNG TÂM PHÁT TRIỂN QUỸ ĐẤT TỈNH");
        hienThisunghiep($conn, sunghiep: "BAN QUẢN LÝ DỰ ÁN NÔNG NGHIỆP VÀ PHÁT TRIỂN NÔNG THÔN");
        hienThisunghiep($conn, sunghiep: "ĐÀI PHÁT THANH VÀ TRUYỀN HÌNH BÌNH ĐỊNH");
       
        ?>
    </div>
</body>
</html>

<?php $conn->close(); ?>

<?php include($_SERVER['DOCUMENT_ROOT'].'/BinhDinhNews/app/views/partials/footer.php'); ?>