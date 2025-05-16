
<?php
        //         echo "<pre>";
        // print_r($_FILES);
        // print_r($_POST);
        // exit;
    require "../../app/controller/loadsession.php";

?>
<?php
    if($_SESSION['role'] < 1)
    {
        echo "Người dùng không hợp lệ"; 
    }
?>
<?php
    //                       _oo0oo_
//                      o8888888o
//                      88" . "88
//                      (| -_- |)
//                      0\  =  /0
//                    ___/`---'\___
//                  .' \\|     |// '.
//                 / \\|||  :  |||// \
//                / _||||| -:- |||||- \
//               |   | \\\  -  /// |   |
//               | \_|  ''\---/''  |_/ |
//               \  .-\__  '-'  ___/-. /
//             ___'. .'  /--.--\  `. .'___
//          ."" '<  `.___\_<|>_/___.' >' "".
//         | | :  `- \`.;`\ _ /`;.`/ - ` : | |
//         \  \ `_.   \_ __\ /__ _/   .-` /  /
//     =====`-.____`.___ \_____/___.-`___.-'=====
//                       `=---='
//
//     ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
//            Phật phù hộ, không bao giờ BUG
//     ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~


    /**
     * Quy trình xử lý
     * 1. Nhận data từ phương thức post của page newArticle.php
     * 2.Insert phần tiêu đề, tag, ... vào database
     * 3.Lấy ID vừa insert, tạo floder với tên ID đó ở mục ArticleData và UploadImages
     * 4. Lưu bài báo và hình ảnh vào các mục trên, đối với hình ảnh thì cộng thêm time() để tránh trùng lặp
     * 5. Lưu các tên hình ảnh đó vô databases
     */
    
    //Insert phần tiêu đề, tag, ... vào database
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {

        require_once  $_SERVER['DOCUMENT_ROOT']. "/BinhDinhNews/app/model/articleDAO.php";
        $artDAO = new articleDAO();
        $lastIDInsert = $artDAO->addArticleHeader($_POST['article-tittle'], $_POST['article-tags']
        , $_SESSION['UID'], "", $_POST['cat-selector'], 0 );

        if($lastIDInsert != null)
        {
              $floderNameImageArticle = "../../public/images/upload/".$lastIDInsert."";
            if(!file_exists($floderNameImageArticle))
            {
                if(mkdir($floderNameImageArticle, 0755))
                {
                    require_once "./Upload.php";
                    $uploader = new Upload();
                    $fileName = $uploader->UploadImageArticle($lastIDInsert, $_FILES['imageTitle']);
                    $artDAO->addImageTitle($lastIDInsert, $fileName);
                }
            }
            $rawContentArticle = $_POST['content-article'];
            $stringContentArticle = "";
            $linesRawData = preg_split('/\r\n|\r|\n/', $rawContentArticle);
            $lineData = array();
            // lọc dòng trống
            foreach($linesRawData as $line)
            {
                if($line != "" && $line != null)
                {
                    $lineData[] = $line;
                }
            }
            // tư tưởng: chèn ảnh sau dòng thứ n
            
            $index = 1;
            // mảng chứa file name của hình ảnh, nếu có nhiều hơn một hình ảnh thì cách nhau bằng dấu |
            $arrayImage = array_fill(1, count($linesRawData), "");
            while(isset($_FILES["imageArticle_".$index]) && 
            isset($_POST["imageArticle_row_".$index]) &&
             isset($_POST["labelArticle_".$index]))
            {
                // print_r($index);

                $FileImage = $_FILES["imageArticle_".$index];
                $rowDisplayImage = $_POST["imageArticle_row_".$index];
                $imageLabel = $_POST["labelArticle_".$index];
                for ($i = 0; $i < count($lineData); $i++)
                {
                    if($i ==( $rowDisplayImage -1))
                    {
                        $lineData[$i] .= ("\n[img]\n".$imageLabel."");
                        require_once "./Upload.php";
                        $uploader = new Upload();
                        $fileName = $uploader->UploadImageArticle($lastIDInsert, $FileImage);
                        $arrayImage[$i+1] .= $fileName ."|";
                    }
                    
                }
                $index++;
            }

            foreach ($lineData as $lines)
            {
                $stringContentArticle .= $lines."\n";

            }
            $stringImageList = "";
            foreach($arrayImage as $img)
            {
                if($img != "")
                    $stringImageList .= trim($img, "|")."|";

            }
            $artDAO->addListImage($lastIDInsert, $stringImageList);
            $f = fopen("../ArticleData/".$lastIDInsert.".txt", "w+");
            fwrite($f, $stringContentArticle);
            fclose($f);

        }
        

    }
   header("Location: ../../public/admin/listArticleAdmin.php");
?>