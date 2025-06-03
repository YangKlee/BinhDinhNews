<?php
require "../../app/controller/loadsession.php";
if ($_SESSION['role'] < 1) {
    header("Location: ./firewall.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Quản lý địa điểm du lịch</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/viewListArticleAdmin.css">
    <link rel="stylesheet" href="../css/menu-admin.css">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="shortcut icon" href="../../../../../BinhDinhNews/public/images/logo.webp" type="image/x-icon">

</head>
<body>
    <div class="main-container">
        <div class="left-container">
            <?php include "../../app/views/left/menu-admin.php"; ?>
        </div>

        <div class="right-container">
            <div class="container-article-list">
                <h1>Danh sách địa điểm du lịch</h1>
                <a href="themPlaces.php"><button class="btn btn-add">+ Thêm địa điểm</button></a>

                <?php
                require_once "../../app/model/PlacesDAO.php";
                $placesDAO = new PlaceDAO();
                $sql = "SELECT * FROM places ORDER BY id DESC";
                $result = $placesDAO->getListPlaceQuery($sql);

                while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                    // Đường dẫn ảnh
                    $imageName = !empty($row['image']) ? $row['image'] : "default.png";
                    $imagePath = "/BinhDinhNews/public/images/imgDanhlamthangcanh/" . $imageName;

                    // Hiển thị
                    echo '
                    <div class="article-container">
                        <article class="article-element">
                            <div class="article-element-left">
                                <img src="' . $imagePath . '" alt="Ảnh địa điểm" width="200">
                            </div>
                            <div class="article-element-right">
                                <h3>' . htmlspecialchars($row['name']) . '</h3>
                                <i>Vị trí: ' . htmlspecialchars($row['location']) . '</i>
                                <p>' . mb_strimwidth(strip_tags($row['description']), 0, 150, "...") . '</p>
                            </div>
                            <div class="article-element-rightfunction">
                                <a href="themPlaces.php?id=' . $row['id'] . '"><button class="btn btn-view">Sửa</button></a>
                                <a class="delete-btn" href="/BinhDinhNews/app/controller/deletePlaces.php?id=' . $row['id'] . '"><button class="btn btn-delete">Xoá</button></a>
                            </div>
                        </article>
                        <hr>
                    </div>';
                }

                mysqli_free_result($result);
                ?>
            </div>
        </div>
    </div>

    <script>
        // Xác nhận trước khi xoá
        document.querySelectorAll(".delete-btn").forEach(function(btn) {
            btn.addEventListener("click", function(e) {
                if (!confirm("Bạn chắc chắn muốn xóa địa điểm này?")) {
                    e.preventDefault();
                }
            });
        });
    </script>
</body>
</html>
