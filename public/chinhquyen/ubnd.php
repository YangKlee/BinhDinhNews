<?php
	include($_SERVER['DOCUMENT_ROOT'].'/BinhDinhNews/app/views/partials/header.php');
?>
<?php
$conn = new mysqli("localhost", "root", "", "BinhDinhNews");
if ($conn->connect_error) {
    die("Không kết nối được CSDL: " . $conn->connect_error);
}

function hienThiCapUBND($conn, $capbac) {
    $sql = "SELECT * FROM ubnd_tinh WHERE capbac = $capbac ORDER BY id ASC";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Nếu là Chủ tịch (capbac = 1) thì căn giữa
        if ($capbac == 1) {
            while ($row = $result->fetch_assoc()) {
                echo '<div class="card center">
                        <img src="../images/imgChinhquyen/UBNDtinh/'.$row['hinhanh'].'" alt="'.$row['hoten'].'">
                        <p class="chucvu">'.$row['chucvu'].'</p>
                        <h4>'.strtoupper($row['hoten']).'</h4>
                      </div>';
            }
        } else {
            // Nếu là các Phó Chủ tịch
            echo '<div class="grid">';
            while ($row = $result->fetch_assoc()) {
                echo '<div class="card">
                        <img src="../images/imgChinhquyen/UBNDtinh/'.$row['hinhanh'].'" alt="'.$row['hoten'].'">
                        <p class="chucvu">'.$row['chucvu'].'</p>
                        <h4>'.strtoupper($row['hoten']).'</h4>
                      </div>';
            }
            echo '</div>';
        }
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
    <title>UBND tỉnh</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            text-align: center;
            margin: 0 auto;
            width: 90%;
        }
        .grid {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
            margin-top: 30px;
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
            font-size: 16px;
            font-weight: bold;
        }
        .card p.chucvu {
            font-size: 14px;
            margin: 5px 0;
        }
        .center {
            margin: 0 auto;
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h3>LÃNH ĐẠO UBND TỈNH</h3>
        <?php
            hienThiCapUBND($conn, 1); // Chủ tịch
            hienThiCapUBND($conn, 2); // Các Phó Chủ tịch
        ?>
    </div>
</body>
</html>
<?php $conn->close(); ?>
<?php
	include($_SERVER['DOCUMENT_ROOT'].'/BinhDinhNews/app/views/partials/footer.php');
?>