<?php
    class Upload{
        function UploadImageArticle($idArt,$file)
        {
            // kiểm tra upload có thành công hay chưa
            $isUploadSuccess = false;
            $floderSave = "../../public/images/upload/".$idArt."/";
            // đề phòng lỗi, nếu chưa có thư mục đích thì tạo thêm thư mục
            if(!is_dir($floderSave))
                mkdir($floderSave, 0755, true);
            // cộng time vào tên để tránh trùng lặp
            $newFileName = time() . "_" . basename($file['name']);
            $targetPath = $floderSave.$newFileName;
            // lọc loại file và kích thước upload
            if ((($file['type'] == 'image/gif') || 
            ($file['type'] == 'image/jpeg')) && 
            ($file['size'] < 5120000)) {
                // di chuyển file đã upload tạm thời vào vị trí lưu trữ chính thức trên server.
                $isUploadSuccess = move_uploaded_file($file['tmp_name'], $targetPath );
            }
            if($isUploadSuccess)
            {
                return $newFileName;
            }
            else{
                return false;
            }

        }
        function UploadImageUserAvatar($uid, $file)
        {

            $newFileName = time() ."_".$uid. "_" . basename($file['name']);
            $targetPath = $_SERVER['DOCUMENT_ROOT'] . "/BinhDinhNews/public/images/userAvatar/".$newFileName;
            
            move_uploaded_file($file['tmp_name'], $targetPath );
            return $newFileName;
        }
    }

?>