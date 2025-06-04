
<!DOCTYPE html>
<html lang="vi">
<head>
    <link rel="stylesheet" href="../../../../../BinhDinhNews/public/css/reset.css">
    <link rel="stylesheet" href="../../../../public/css/footer-style.css">
    <link rel="stylesheet" href="../../../../../BinhDinhNews/public/css/header-style.css">
    <link rel="shortcut icon" href="../../../../../BinhDinhNews/public/images/logo.webp" type="image/x-icon">
    <meta charset="UTF-8">
    <title>Địa điểm du lịch</title>
    <style>
        .place { border: 1px solid #ccc; margin: 10px; padding: 10px; display: flex; }
        .place img { width: 200px; height: auto; margin-right: 10px; }
        .pagination { margin-top: 20px; }
        .pagination a {
            margin: 0 5px; padding: 5px 10px; background: #eee; text-decoration: none;
            border: 1px solid #ccc;
        }
        .pagination .current {
            background: #333; color: #fff; font-weight: bold;
        }
    </style>
</head>
<?php include($_SERVER['DOCUMENT_ROOT'].'/BinhDinhNews/app/views/partials/header.php'); ?>
<?php
    $mysqli = new mysqli("localhost", "root", "", "dulich");
    if ($mysqli->connect_errno) {
        die("Kết nối thất bại: " . $mysqli->connect_error);
    }

    // Số địa điểm mỗi trang
    $places_per_page = 3;

    // Xác định trang hiện tại
    $current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
    if ($current_page < 1) $current_page = 1;

    // Tổng số địa điểm
    $total_places_result = $mysqli->query("SELECT COUNT(*) AS total FROM places");
    $total_places = $total_places_result->fetch_assoc()['total'];
    $total_pages = ceil($total_places / $places_per_page);

    // Lấy dữ liệu trang hiện tại
    $offset = ($current_page - 1) * $places_per_page;
    $result = $mysqli->query("SELECT * FROM places LIMIT $places_per_page OFFSET $offset");

?>
<body>
    <h1>Danh sách địa điểm du lịch</h1>

    <?php while($row = mysqli_fetch_assoc($result)): ?>
        <div class="place">
            <img src="/BinhDinhNews/public/images/imgDanhlamthangcanh/<?php echo htmlspecialchars($row['image']); ?>" alt="">
            <div>
                <h2>
                    <a href="/BinhDinhNews/public/pages/site/dulich/chitietdulich.php?id=<?php echo $row['id']; ?>">
                        <?php echo htmlspecialchars($row['name']); ?>
                    </a>
                </h2>
                <p><strong>Vị trí:</strong> <?php echo htmlspecialchars($row['location']); ?></p>
                <p><?php echo mb_strimwidth(strip_tags($row['description']), 0, 100, "..."); ?></p>
            </div>
        </div>
    <?php endwhile; ?>

    <!-- Phân trang -->
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
</body>
</html>
<?php include($_SERVER['DOCUMENT_ROOT'].'/BinhDinhNews/app/views/partials/footer.php'); ?>
