<?php include($_SERVER['DOCUMENT_ROOT'].'/BinhDinhNews/app/views/partials/header.php'); ?>

<?php
$conn = new mysqli("localhost", "root", "", "BinhDinhNews");
if ($conn->connect_error) {
    die("Không kết nối được: " . $conn->connect_error);
}

function hienThiDiaPhuong($conn, $diaphuong) {
    // Chủ tịch
    $sql_chutich = "SELECT * FROM ubnd WHERE diaphuong = '$diaphuong' AND capbac = 1";
    $result_ct = $conn->query($sql_chutich);

    // Phó Chủ tịch
    $sql_pho = "SELECT * FROM ubnd WHERE diaphuong = '$diaphuong' AND capbac = 2";
    $result_pho = $conn->query($sql_pho);

    echo "<h3> {$diaphuong} </h3>";

if ($result_ct->num_rows > 0) {
    echo '<div class="chutich-container">';
    while ($row = $result_ct->fetch_assoc()) {
        echo '<div class="item">
                <img src="../../../images/imgChinhquyen/UBND/'.$row['anh'].'" alt="'.$row['ten'].'">
                <label><b>'.$row['chucvu'].'</b><br>'.$row['ten'].'</label>
              </div>';
    }
    echo '</div>';
}

if ($result_pho->num_rows > 0) {
    echo '<div class="pho-container">';
    while ($row = $result_pho->fetch_assoc()) {
        echo '<div class="item">
                <img src="../../../images/imgChinhquyen/UBND/'.$row['anh'].'" alt="'.$row['ten'].'">
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
    <link rel="shortcut icon" href="../../../../../BinhDinhNews/public/images/logo.webp" type="image/x-icon">
    <link rel="stylesheet" href="../../../../../BinhDinhNews/public/css/rightmenu-style.css">

    <title>UBND các huyện, thị xã, thành phố</title>
<style>
    
    .container {
        display: grid;
        grid-template-columns: 5% 65% 30%;
        padding: 0 20px; 
        box-sizing: border-box;
    }

    .container-mid h3 {
        text-align: left;
        margin: 20px 0;
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
        width: 220px;
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
        <div class="container-left"></div>
        <div class="container-mid">
            <?php
                hienThiDiaPhuong($conn, "TP QUY NHƠN");
                hienThiDiaPhuong($conn, "TX AN NHƠN");
                hienThiDiaPhuong($conn, "TX HOÀI NHƠN");
                hienThiDiaPhuong($conn, "HUYỆN PHÙ MỸ");
                hienThiDiaPhuong($conn, "HUYỆN VĨNH THẠNH");
                hienThiDiaPhuong($conn, "HUYỆN HOÀI ÂN");
                hienThiDiaPhuong($conn, "HUYỆN VÂN CANH");
                hienThiDiaPhuong($conn, "HUYỆN PHÙ CÁT");
                hienThiDiaPhuong($conn, "HUYỆN AN LÃO");
                hienThiDiaPhuong($conn, "HUYỆN TUY PHƯỚC");
                hienThiDiaPhuong($conn, "HUYỆN TÂY SƠN");
            ?>
        </div>
        <div class="container-right">
            <?php include($_SERVER['DOCUMENT_ROOT'].'/BinhDinhNews/app/views/right/homepage.php'); ?>
        </div>
    </div>
</body>
</html>

<?php $conn->close(); ?>
<?php
	include($_SERVER['DOCUMENT_ROOT'].'/BinhDinhNews/app/views/partials/footer.php');
?>