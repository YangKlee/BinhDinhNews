<?php include($_SERVER['DOCUMENT_ROOT'].'/BinhDinhNews/app/views/partials/header.php'); ?>

<?php 
$mysqli = new mysqli("localhost", "root", "", "dulich");
if ($mysqli->connect_errno) {
    die("Kết nối thất bại: " . $mysqli->connect_error);
}

// Kiểm tra nếu ID không tồn tại
if (!isset($_GET['id'])) {
    die("Không tìm thấy địa điểm.");
}
$id = intval($_GET['id']);

$result = $mysqli->query("SELECT * FROM places WHERE id = $id");
if ($result->num_rows === 0) {
    die("Không tìm thấy địa điểm.");
}
$row = $result->fetch_assoc();

// 📌 **Lấy ảnh theo ID nếu có**
$dir = "../../../images/imgDanhlamthangcanh/dulich/" . $id;
$images = glob($dir . "/*.{jpg,jpeg,png,gif,webp}", GLOB_BRACE);
$image_url = !empty($images) ? $images[0] : "";

// 📌 **Nếu bài viết không có ảnh riêng, chọn ảnh ngẫu nhiên từ thư viện**
if (empty($image_url)) {
    $randomDir = "../../../images/imgDanhlamthangcanh/dulich/";
    $randomImages = glob($randomDir . "*.{jpg,jpeg,png,gif,webp}", GLOB_BRACE);
    $image_url = !empty($randomImages) ? $randomImages[array_rand($randomImages)] : "/path/to/default-image.jpg"; // Ảnh mặc định nếu không có ảnh
}

// 📌 **Lấy mô tả**
// 📌 **Lấy mô tả từ file hoặc từ database**
$description = "Không tìm thấy mô tả.";
$desc_path = $dir . "/mota.txt";

if (file_exists($desc_path)) {
    $description = nl2br(file_get_contents($desc_path));
} else {
    $description = !empty($row['description']) ? nl2br(htmlspecialchars($row['description'])) : "Không có mô tả.";
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Chi tiết du lịch</title>
    <link rel="shortcut icon" href="../../../../../BinhDinhNews/public/images/logo.webp" type="image/x-icon">
    <link rel="stylesheet" href="../../../../public/css/reset.css">
    <link rel="stylesheet" href="../../../../public/css/footer-style.css">
    <link rel="stylesheet" href="../../../../public/css/header-style.css">
    <link rel="stylesheet" href="../../../../public/css/chitietdulich.css">
    <title><?php echo htmlspecialchars($row['name']); ?></title>
</head>
<body>
    <h1 class="title"><?php echo htmlspecialchars($row['name']); ?></h1>

    <?php if (!empty($image_url)): ?>
        <div class="main-image-container"> 
            <img src="<?php echo htmlspecialchars($image_url); ?>" alt="Ảnh chính">
        </div>
    <?php else: ?>
        <p class="no-image">Không có hình ảnh.</p>
    <?php endif; ?>

    <h2 class="section-title">Vị trí:</h2>
    <p class="location-text"><?php echo htmlspecialchars($row['location']); ?></p> 

    <h2 class="section-title">Mô tả:</h2>
    <p class="description-box"><?php echo $description; ?></p> 

    <a class="back-link" href="places.php">← Quay lại danh sách địa điểm</a>
</body>
</html>

<?php include($_SERVER['DOCUMENT_ROOT'].'/BinhDinhNews/app/views/partials/footer.php'); ?>
