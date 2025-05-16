<?php
	include($_SERVER['DOCUMENT_ROOT'].'/BinhDinhNews/app/views/partials/header.php');
?>
<?php
$conn = new mysqli("localhost", "root", "", "BinhDinhNews");
if ($conn->connect_error) {
    die("hem kết nối được: " . $conn->connect_error);
}

function hienThiCap($conn, $capbac ) {
    $sql = "SELECT * FROM hdnd WHERE capbac = $capbac ORDER BY id ASC";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo '<div class="grid">';
        while ($row = $result->fetch_assoc()) {
            echo '<div class="card">
                    <img src="../images/imgChinhquyen/HĐND/'.$row['anh'].'" alt="'.$row['ten'].'">
                    <h4>'.$row['ten'].'</h4>
                    <p>'.$row['chucvu'].'</p>
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
            text-align: center;
        }
        .grid {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
            margin-top: 20px;
        }
        .card {
            width: 180px;
        }
        .card img {
            width: 100%;
            height: auto;
            border-radius: 5px;
        }
        .card h4 {
            margin: 10px 0 5px;
        }
        .card p {
            font-size: 14px;
        }
    </style>
            <link rel="stylesheet" href="../css/reset.css">
	<link rel="stylesheet" href="../css/footer-style.css">
	<link rel="stylesheet" href="../css/header-style.css">
</head>
<body>
<div class="container">
    <h3>Lãnh đạo Hội đồng nhân dân</h3>
    <?php
        hienThiCap($conn, 1);
        hienThiCap($conn, 2);
        
    ?>
    
</div>
</body>
</html>
<?php $conn->close(); ?>
<?php
	include($_SERVER['DOCUMENT_ROOT'].'/BinhDinhNews/app/views/partials/footer.php');
?>