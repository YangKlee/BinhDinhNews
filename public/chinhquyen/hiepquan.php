<?php
	include($_SERVER['DOCUMENT_ROOT'].'/BinhDinhNews/app/views/partials/header.php');
?>
<?php
$conn = new mysqli("localhost", "root", "", "BinhDinhNews");
if ($conn->connect_error) {
    die("Không kết nối được: " . $conn->connect_error);
}

function hienThihiepquan($conn, $coquan) {
    // Chủ tịch
    $sql_chutich = "SELECT * FROM donvihiepquan WHERE tencoquan = '$coquan' AND capbac = 1";
    $result_ct = $conn->query($sql_chutich);

    // Phó Chủ tịch
    $sql_pho = "SELECT * FROM donvihiepquan WHERE tencoquan = '$coquan' AND capbac = 2";
    $result_pho = $conn->query($sql_pho);

    // Cấp bậc 3 (Trưởng phòng, Phó phòng...)
    $sql_cap3 = "SELECT * FROM coquanchuyenmon WHERE tencoquan = '$coquan' AND capbac = 3";
    $result_cap3 = $conn->query($sql_cap3); // SỬA LỖI: Gán vào biến $result_cap3

    echo "<h3>  {$coquan} </h3> </div>";

if ($result_ct->num_rows > 0) {
    echo '<div class="chutich-container">';
    while ($row = $result_ct->fetch_assoc()) {
        echo '<div class="item">
                <img src="../images/imgChinhquyen/donvihiepquan/'.$row['hinhanh'].'" alt="'.$row['hoten'].'">
                <label><b>'.$row['chucvu'].'</b><br>'.$row['hoten'].'</label>
              </div>';
    }
    echo '</div>';
}

if ($result_pho->num_rows > 0) {
    echo '<div class="pho-container">';
    while ($row = $result_pho->fetch_assoc()) {
        echo '<div class="item">
                <img src="../images/imgChinhquyen/donvihiepquan/'.$row['hinhanh'].'" alt="'.$row['hoten'].'">
                <label><b>'.$row['chucvu'].'</b><br>'.$row['hoten'].'</label>
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
            <link rel="stylesheet" href="../css/reset.css">
	<link rel="stylesheet" href="../css/footer-style.css">
	<link rel="stylesheet" href="../css/header-style.css">
<style>
    

    .container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 40px 20px;
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
    font-size: 14px;
}

</style>

</head>
<body>
    <div class="lanhdao-container">
        <?php
        hienThihiepquan($conn, coquan: "Bộ chỉ huy Bộ đội biên phòng tỉnh");
        hienThihiepquan($conn, coquan: "Bộ chỉ huy Quân sự tỉnh");
        hienThihiepquan($conn, coquan: "Công an tỉnh");
        hienThihiepquan($conn, coquan: "Chi cục thống kê tỉnh Bình Định");
        hienThihiepquan($conn, coquan: "Tòa án nhân dân tỉnh Bình Định");
        hienThihiepquan($conn, coquan: "Viện kiểm sát nhân dân tỉnh");
        hienThihiepquan($conn, coquan: "Bảo hiểm xã hội khu vực XXIII");
        ?>
    </div>
</body>
</html>

<?php $conn->close(); ?>
<?php
	include($_SERVER['DOCUMENT_ROOT'].'/BinhDinhNews/app/views/partials/footer.php');
?>