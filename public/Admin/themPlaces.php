<?php
    require "../../app/controller/loadsession.php";
    require_once "../../app/model/PlacesDAO.php";

    // Kiểm tra quyền truy cập
    if ($_SESSION['role'] < 1) {
        header("Location: ./firewall.php");
        exit;
    }

    $placesDAO = new PlaceDAO();
    $place = null;
    $isEditMode = false;

    // Kiểm tra nếu có ID địa điểm → Chế độ sửa
    if (isset($_GET['id'])) {
        $place = $placesDAO->getPlaceById($_GET['id']);
        if (!$place) {
            echo "Lỗi: Không tìm thấy địa điểm!";
            exit;
        }
        $isEditMode = true;
    }

    // Xử lý dữ liệu form
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $name = $_POST['place-name'];
        $location = $_POST['place-location'];
        $description = $_POST['place-description'];
        $imagePath = $place['image'] ?? "default_place.png"; // chỉ là tên ảnh

        // Kiểm tra nếu có ảnh mới
        if (!empty($_FILES["place-image"]["name"])) {
            $targetDir = $_SERVER['DOCUMENT_ROOT'] . "/BinhDinhNews/public/images/imgDanhlamthangcanh/";
            $imageName = time() . "_" . basename($_FILES["place-image"]["name"]);
            $targetFilePath = $targetDir . $imageName;

            if (move_uploaded_file($_FILES["place-image"]["tmp_name"], $targetFilePath)) {
                $imagePath = $imageName; // Chỉ lưu tên file vào CSDL
            } else {
                echo "Lỗi tải ảnh lên!";
                exit;
            }
        }

        // Nếu có `id`, cập nhật địa điểm → Ngược lại, thêm mới
        if ($isEditMode) {
            $success = $placesDAO->updatePlace($_GET['id'], $name, $description, $imagePath, $location);
        } else {
            $success = $placesDAO->addPlace($name, $description, $imagePath, $location);
        }

        if ($success) {
            header("Location: listPlaces.php");
            exit;
        } else {
            echo "Lỗi khi xử lý dữ liệu!";
        }
    }
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title><?php echo $isEditMode ? "Sửa địa điểm" : "Thêm địa điểm"; ?></title>
    <link rel="stylesheet" href="../css/menu-admin.css">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/add-article-style.css">
    <link rel="shortcut icon" href="../../../../../BinhDinhNews/public/images/logo.webp" type="image/x-icon">

</head>
<body>
    <div class="main-container">
        <div class="left-container">
            <?php include "../../app/views/left/menu-admin.php"; ?>
        </div>

        <div class="right-container">
            <form class="form-article-input" action="" method="POST" enctype="multipart/form-data">
                <h1><?php echo $isEditMode ? "Sửa địa điểm" : "Thêm địa điểm mới"; ?></h1>

                <div class="input-warpper">
                    <label for="">Tên địa điểm <span style="color:red">*</span></label>
                    <input type="text" name="place-name" value="<?php echo $place['name'] ?? ''; ?>" placeholder="Nhập tên địa điểm..." required>
                </div>

                <div class="input-warpper">
                    <label for="">Mô tả địa điểm <span style="color:red">*</span></label>
                    <textarea name="place-description" placeholder="Nhập mô tả..." required><?php echo $place['description'] ?? ''; ?></textarea>
                </div>

                <div class="input-warpper">
                    <label for="">Hình ảnh</label>
                    <input type="file" name="place-image" accept="image/*">
                    <?php if ($isEditMode && !empty($place['image'])): ?>
                        <img src="/BinhDinhNews/public/images/imgDanhlamthangcanh/<?php echo $place['image']; ?>" width="200" alt="Ảnh hiện tại">
                    <?php endif; ?>
                </div>

                <div class="input-warpper">
                    <label for="">Vị trí (địa chỉ) <span style="color:red">*</span></label>
                    <input type="text" name="place-location" value="<?php echo $place['location'] ?? ''; ?>" placeholder="Nhập vị trí..." required>
                </div>

                <input class="btn submit" type="submit" value="<?php echo $isEditMode ? "Cập nhật địa điểm" : "Thêm địa điểm"; ?>">
                <button type="reset" class="btn delete">Xóa nội dung</button>
            </form>
        </div>
    </div>
</body>
</html>
