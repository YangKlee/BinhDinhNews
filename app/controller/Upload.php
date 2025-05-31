<?php
    class Upload{
        function UploadImageArticle($idArt,$file)
        {
            $isUploadSuccess = false;
            $floderSave = "../../public/images/upload/".$idArt."/";
            if(!is_dir($floderSave))
                mkdir($floderSave, 0755, true);
            $newFileName = time() . "_" . basename($file['name']);
            $targetPath = $floderSave.$newFileName;
            if ((($file['type'] == 'image/gif') || 
            ($file['type'] == 'image/jpeg')) && 
            ($file['size'] < 5120000)) {
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