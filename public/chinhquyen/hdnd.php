<?php
	include($_SERVER['DOCUMENT_ROOT'].'/BinhDinhNews/app/views/partials/header.php');
?>
<?php
$conn = new mysqli("localhost", "root", "", "BinhDinhNews");
if ($conn->connect_error) {
    die("hem kết nối được: " . $conn->connect_error);
}

function hienThiCap($conn, $sunghiep) {
    // Chủ tịch
    $sql_chutich = "SELECT * FROM hdnd WHERE capbac = 1";
    $result_ct = $conn->query($sql_chutich);

    // Phó Chủ tịch
    $sql_pho = "SELECT * FROM hdnd WHERE capbac = 2";
    $result_pho = $conn->query($sql_pho);

    echo "<h3> Lãnh đạo Hội đồng nhân dân </h3> ";

    if ($result_ct->num_rows > 0) {
        echo '<div class="chutich-container">';
        while ($row = $result_ct->fetch_assoc()) {
            echo '<div class="item">
                    <img src="../images/imgChinhquyen/HĐND/'.$row['anh'].'" alt="'.$row['ten'].'">
                    <label><b>'.$row['ten'].'</b><br>'.$row['chucvu'].'</label>
                </div>';
        }
        echo '</div>';
    }

    if ($result_pho->num_rows > 0) {
        echo '<div class="pho-container">';
        while ($row = $result_pho->fetch_assoc()) {
            echo '<div class="item">
                    <img src="../images/imgChinhquyen/HĐND/'.$row['anh'].'" alt="'.$row['ten'].'">
                    <label><b>'.$row['ten'].'</b><br>'.$row['chucvu'].'</label>
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
    <title>Lãnh đạo Hội đồng nhân dân</title>
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
        font-size: 16px;
    }
    </style>
            <link rel="stylesheet" href="../css/reset.css">
	<link rel="stylesheet" href="../css/footer-style.css">
	<link rel="stylesheet" href="../css/header-style.css">
</head>
<body>
<div class="container">
    <?php
        hienThiCap($conn, 1);
                
    ?>
    
</div>
</body>
</html>
<?php $conn->close(); ?>
<?php
	include($_SERVER['DOCUMENT_ROOT'].'/BinhDinhNews/app/views/partials/footer.php');
?>