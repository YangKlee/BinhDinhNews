<?php include($_SERVER['DOCUMENT_ROOT'].'/BinhDinhNews/app/views/partials/header.php'); ?>

<?php 
$mysqli = new mysqli("localhost", "root", "", "dulich");
if ($mysqli->connect_errno) {
    die("Kết nối thất bại: " . $mysqli->connect_error);
}

if (!isset($_GET['id'])) {
    die("Không tìm thấy địa điểm.");
}
$id = intval($_GET['id']);

$result = $mysqli->query("SELECT * FROM places WHERE id = $id");
if ($result->num_rows === 0) {
    die("Không tìm thấy địa điểm.");
}
$row = $result->fetch_assoc();

// Lấy đường dẫn ảnh (chỉ lấy 1 ảnh)
$dir = "../../../images/imgDanhlamthangcanh/dulich/" . $id;
$images = glob($dir . "/*.{jpg,jpeg,png,gif,webp}", GLOB_BRACE);
$image_url = !empty($images) ? $images[0] : ""; 

// Lấy mô tả
$description = "Không tìm thấy mô tả.";
$desc_path = $dir . "/mota.txt";
if (file_exists($desc_path)) {
    $description = nl2br(file_get_contents($desc_path));
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../../../public/css/reset.css">
    <link rel="stylesheet" href="../../../../public/css/footer-style.css">
    <link rel="stylesheet" href="../../../../public/css/header-style.css">
    <link rel="stylesheet" href="../../../../public/css/chitietdulich.css">
    <title><?php echo htmlspecialchars($row['name']); ?></title>
</head>

<body>
    <h1 class="title"><?php echo htmlspecialchars($row['name']); ?></h1>

    <?php if (!empty($image_url)): ?>
        <div class="main-image-container"> <!-- ✅ Đổi `large-image` thành `main-image-container` -->
            <img src="<?php echo htmlspecialchars($image_url); ?>" alt="Ảnh chính">
        </div>
    <?php else: ?>
        <p class="no-image">Không có hình ảnh.</p>
    <?php endif; ?>

    <h2 class="section-title">Vị trí:</h2>
    <p class="location-text"><?php echo htmlspecialchars($row['location']); ?></p> <!-- ✅ Đổi `p` phần vị trí thành `location-text` -->

    <h2 class="section-title">Mô tả:</h2>
    <p class="description-box"><?php echo $description; ?></p> <!-- ✅ Đổi `p` phần mô tả thành `description-box` -->

    <a class="back-link" href="places.php">← Quay lại danh sách địa điểm</a>
</body>
</html>

<?php include($_SERVER['DOCUMENT_ROOT'].'/BinhDinhNews/app/views/partials/footer.php'); ?>
