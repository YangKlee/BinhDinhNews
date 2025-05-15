<?php
    class Upload{
        function UploadImageArticle($idArt,$file)
        {
            $newFileName = time() . "_" . basename($file['name']);
            $targetPath = "../../public/images/upload/".$idArt."/".$newFileName;
            move_uploaded_file($file['tmp_name'], $targetPath );

            return $newFileName;
        }
    }

?>