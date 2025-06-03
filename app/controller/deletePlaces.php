<?php
    if(isset($_GET['id']) && $_SERVER['REQUEST_METHOD'] == 'GET')
    {
        require_once "../../app/model/PlacesDAO.php";
        $placesDAO = new PlaceDAO();

        // Lấy thông tin địa điểm cần xóa
        $data = $placesDAO->getPlaceById($_GET['id']);

        // Xóa địa điểm khỏi database
        $placesDAO->deletePlace($_GET['id']);

        // Xóa hình ảnh liên quan đến địa điểm
        $imagePlaceDir = $_SERVER['DOCUMENT_ROOT']."../../../BinhDinhNews/public/images/imgDanhlamthangcanh";
        
        if (isset($data['image']) && file_exists($imagePlaceDir.$data['image'])) {
            unlink($imagePlaceDir.$data['image']);
        }

        // Chuyển hướng về danh sách địa điểm sau khi xóa
        header("Location: /BinhDinhNews/public/Admin/listPlaces.php");
        exit;
    }
?>
