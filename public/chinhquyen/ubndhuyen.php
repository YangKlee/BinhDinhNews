<?php
	include($_SERVER['DOCUMENT_ROOT'].'/BinhDinhNews/app/views/partials/header.php');
?>
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

    echo "<h3> UBND {$diaphuong} </h3>";

if ($result_ct->num_rows > 0) {
    echo '<div class="chutich-container">';
    while ($row = $result_ct->fetch_assoc()) {
        echo '<div class="item">
                <img src="../images/imgChinhquyen/UBND/'.$row['anh'].'" alt="'.$row['ten'].'">
                <label><b>'.$row['chucvu'].'</b><br>'.$row['ten'].'</label>
              </div>';
    }
    echo '</div>';
}

if ($result_pho->num_rows > 0) {
    echo '<div class="pho-container">';
    while ($row = $result_pho->fetch_assoc()) {
        echo '<div class="item">
                <img src="../images/imgChinhquyen/UBND/'.$row['anh'].'" alt="'.$row['ten'].'">
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
            <link rel="stylesheet" href="../css/reset.css">
	<link rel="stylesheet" href="../css/footer-style.css">
	<link rel="stylesheet" href="../css/header-style.css">
<style>
    
    .container {
        padding: 0 20px; /* tạo khoảng cách 2 bên cho toàn bộ nội dung */
        box-sizing: border-box;
    }

    .container h3 {
        text-align: left;
        margin: 20px 0;
        padding-left: 10px; /* hoặc dùng margin-left nếu thích */
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
        font-size: 16px;
    }

</style>

</head>
<body>
    <div class="container">
        <?php
        hienThiDiaPhuong($conn, "TP Quy Nhơn");
        hienThiDiaPhuong($conn, "TX An Nhơn");
        hienThiDiaPhuong($conn, "TX Hoài Nhơn");
        hienThiDiaPhuong($conn, "huyện Phù Mỹ");
        hienThiDiaPhuong($conn, "huyện Vĩnh Thạnh");
        hienThiDiaPhuong($conn, "huyện Hoài Ân");
        hienThiDiaPhuong($conn, "huyện Vân Canh");
        hienThiDiaPhuong($conn, "huyện Phù Cát");
        hienThiDiaPhuong($conn, "huyện An Lão");
        hienThiDiaPhuong($conn, "huyện Tuy Phước");
        hienThiDiaPhuong($conn, "huyện Tây Sơn");
        ?>
    </div>
</body>
</html>

<?php $conn->close(); ?>
<?php
	include($_SERVER['DOCUMENT_ROOT'].'/BinhDinhNews/app/views/partials/footer.php');
?>