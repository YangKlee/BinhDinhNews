<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../public/css/stylestracuu.css">
    <link rel="stylesheet" href="../../../public/css/reset.css">
    <link rel="stylesheet" href="../../../public/css/header-style.css">
    <link rel="stylesheet" href="../../../public/css/footer-style.css">
    <link rel="shortcut icon" href="../../../public/images/logo.webp" type="image/x-icon">
</head>

<?php
    include($_SERVER['DOCUMENT_ROOT'].'/BinhDinhNews/app/views/partials/header.php');
?>

<?php

// Xử lý form
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["sbd"])) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "tracuudiemthi";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Hem kết nối được: " . $conn->connect_error);
    }

    $sbd = $_POST["sbd"];
    $sql = "SELECT * FROM diemthi WHERE sbd = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $sbd);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        echo "<div class='result'>";
        echo "<h2>Kết quả tra cứu cho thí sinh có số báo danh: <strong>{$row['sbd']}</strong> - Cụm thi: Sở GDĐT tỉnh Bình Định </h2>";
        echo "<table><tr><th>Môn</th><th>Điểm</th></tr>";

        $subjects = [
            "Toán" => "toan",
            "Ngữ Văn" => "van",
            "Ngoại Ngữ" => "anh",
            "Vật Lý" => "ly",
            "Hóa Học" => "hoa",
            "Sinh Học" => "sinh",
            "Lịch Sử" => "su",
            "Địa Lý" => "dia",
            "GDCD" => "gdcd"
        ];

        foreach ($subjects as $label => $field) {
            if (isset($row[$field]) && $row[$field] !== null && $row[$field] !== "") {
                echo "<tr><td>$label</td><td>{$row[$field]}</td></tr>";
            }
        }

        echo "</table>";
        echo "</div>";
    } else {
        echo "<div class='result'><p>Không tìm thấy thông tin thí sinh có số báo danh: <strong>$sbd</strong></p></div>";
    }

    $stmt->close();
    $conn->close();
}
?>


<?php
    include($_SERVER['DOCUMENT_ROOT'].'/BinhDinhNews/app/views/partials/footer.php');
?>