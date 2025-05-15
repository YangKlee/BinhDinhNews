<?php
    class Upload{
        function UploadImageArticle($idArt,$file)
        {
            $newFileName = time() . "_" . basename($file['name']);
            $targetPath = "../../public/images/upload/".$idArt."/".$newFileName;
            	if ((($file['type'] == 'image/gif') || 
                ($file['type'] == 'image/jpeg') || 
                ($file['type'] == 'image/jpg') ||
                ($file['type'] == 'image/png')) && 
                ($file['size'] < 5120000)) 
                {
                    
                    move_uploaded_file($file['tmp_name'], $targetPath );
                }

            return $newFileName;
        }
    }

?>