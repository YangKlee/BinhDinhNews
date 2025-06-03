<?php
    require "../../app/controller/loadsession.php";

    // Kiểm tra quyền truy cập
    if (!isset($_SESSION['role']) || $_SESSION['role'] < 1) {
        header("Location: ./firewall.php");
        exit;
    }

    // Kiểm tra phương thức POST
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        require_once "../../app/model/PlacesDAO.php";

        $placeDAO = new PlaceDAO();

        // Kiểm tra dữ liệu đầu vào
        if (!isset($_POST['place-name'], $_POST['place-location'], $_POST['place-description'], $_FILES['place-image'])) {
            echo "Thiếu dữ liệu đầu vào!";
            exit;
        }

        $name = $_POST['place-name'];
        $location = $_POST['place-location'];
        $description = $_POST['place-description'];
        
        // Xử lý ảnh
        $targetDir = "/BinhDinhNews/public/images/imgDanhlamthangcanh/";
        if (!file_exists($targetDir)) {
            mkdir($targetDir, 0755, true);
        }
        
        $imageName = time() . "_" . basename($_FILES["place-image"]["name"]);
        $targetFilePath = $targetDir . $imageName;

        if (move_uploaded_file($_FILES["place-image"]["tmp_name"], $targetFilePath)) {
            $imagePath = "../../../BinhDinhNews/public/images/imgDanhlamthangcanh/" . $imageName;

        } else {
            $imagePath = "public/images/default_place.png"; // Nếu lỗi, dùng ảnh mặc định
        }

        // Thêm vào database
        $success = $placeDAO->addPlace($name, $description, $imagePath, $location);

        if ($success) {
            header("Location: ../../../../../BinhDinhNews/public/Admin/listPlaces.php");
            exit;
        } else {
            echo "Lỗi khi thêm địa điểm vào cơ sở dữ liệu!";
        }
    }
?>
