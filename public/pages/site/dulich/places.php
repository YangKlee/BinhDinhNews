<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Địa điểm du lịch</title>
    <link rel="shortcut icon" href="../../../../../BinhDinhNews/public/images/logo.webp" type="image/x-icon">
    <link rel="stylesheet" href="../../../../../BinhDinhNews/public/css/reset.css">
    <link rel="stylesheet" href="../../../../public/css/footer-style.css">
    <link rel="stylesheet" href="../../../../../BinhDinhNews/public/css/header-style.css">
    <link rel="stylesheet" href="../../../../public/css/places.css">
</head>
<body>

<?php include($_SERVER['DOCUMENT_ROOT'].'/BinhDinhNews/app/views/partials/header.php'); ?>

<?php
$mysqli = new mysqli("localhost", "root", "", "dulich");
if ($mysqli->connect_errno) {
    die("Kết nối thất bại: " . $mysqli->connect_error);
}

$places_per_page = 6;
$current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
if ($current_page < 1) $current_page = 1;

$total_places_result = $mysqli->query("SELECT COUNT(*) AS total FROM places");
$total_places = $total_places_result->fetch_assoc()['total'];
$total_pages = ceil($total_places / $places_per_page);

$offset = ($current_page - 1) * $places_per_page;
$result = $mysqli->query("SELECT * FROM places ORDER BY id ASC LIMIT $places_per_page OFFSET $offset");
?>

 <div class = "title" ><b>Danh sách địa điểm du lịch</b></div>

<div class="grid-container">
    <?php while ($row = mysqli_fetch_assoc($result)): ?>
        <div class="place-card">
                <img src="/BinhDinhNews/public/images/imgDanhlamthangcanh/<?php echo htmlspecialchars($row['image']); ?>" alt="">
            <div class="place-content">
                <h2> 
                        <?php echo htmlspecialchars($row['name']); ?>
                </h2>
                <p><strong>Vị trí:</strong> <?php echo htmlspecialchars($row['location']); ?></p> 
                <!-- <p><?php echo mb_strimwidth(strip_tags($row['description']), 0, 100, "..."); ?></p> -->
                <a class="btn-detail" href="/BinhDinhNews/public/pages/site/dulich/chitietdulich.php?id=<?php echo $row['id']; ?>">Chi tiết</a>
            </div>
        </div>
    <?php endwhile; ?>
</div>


<div class="pagination">
    <?php if ($current_page > 1): ?>
        <a href="?page=<?php echo $current_page - 1; ?>">&laquo; Trước</a>
    <?php endif; ?>

    <?php for ($i = 1; $i <= $total_pages; $i++): ?>
        <a href="?page=<?php echo $i; ?>" class="<?php if ($i == $current_page) echo 'current'; ?>">
            <?php echo $i; ?>
        </a>
    <?php endfor; ?>

    <?php if ($current_page < $total_pages): ?>
        <a href="?page=<?php echo $current_page + 1; ?>">Sau &raquo;</a>
    <?php endif; ?>
</div>

<?php include($_SERVER['DOCUMENT_ROOT'].'/BinhDinhNews/app/views/partials/footer.php'); ?>
</body>
</html>
