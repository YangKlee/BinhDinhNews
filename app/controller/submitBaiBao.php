
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
     * 2.Insert phần tiêu đề, tag, ... (gọi là header article) vào database
     * 3.Lấy ID bài vừa insert, tạo floder với tên ID đó ở mục ArticleData và UploadImages
     * 4. Build file txt xong mục ArticleData phù hợp với việc tổ chức dữ liệu đc quyết định trước đ1o
     * 5. Lưu bài báo và hình ảnh vào các mục trên, đối với hình ảnh thì cộng thêm time() để tránh trùng lặp
     * Các hình ảnh bao gồm hình ảnh của bài báo, ảnh bìa.
     * 6. Lưu các tên hình ảnh đó vô databases
     */
    
    //Insert phần tiêu đề, tag, ... vào database
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {

        require_once  $_SERVER['DOCUMENT_ROOT']. "/BinhDinhNews/app/model/articleDAO.php";
        $artDAO = new articleDAO();
        // nếu role là admin thì thêm phần tên tác giả khách (authorGuestName) vào database và trạng thái đăng mặc định là đã đăng
        if($_SESSION['role'] == 2)
        {
            // hàm addArticleHeader dc xây dựng để trả về id bài báo vừa thêm header vào
            $lastIDInsert = $artDAO->addArticleHeader($_POST['article-tittle'], $_POST['article-tags']
            , NULL, $_POST['article-author'], $_POST['cat-selector'], 1 );
        }
        else if($_SESSION['role'] == 1)
        {
            $lastIDInsert = $artDAO->addArticleHeader($_POST['article-tittle'], $_POST['article-tags']
            , $_SESSION['UID'], "", $_POST['cat-selector'], 0 );
        }

        // đưa ảnh bìa vào tthư mục upload v=
        if($lastIDInsert != null)
        {
              $floderNameImageArticle = "../../public/images/upload/".$lastIDInsert."";
              // nếu chưa tồn tại thư mục thì tạo mới
            $floderNewsSuccess = false;
            if(!file_exists($floderNameImageArticle))
            {
                $floderNewsSuccess = mkdir($floderNameImageArticle, 0755);
            }
            else{
                $floderNewsSuccess = true;
            }
            require_once "./Upload.php";
            $uploader = new Upload();
            $fileName = $uploader->UploadImageArticle($lastIDInsert, $_FILES['imageTitle']);
            // lưu tên ảnh bìa vào database
             $artDAO->addImageTitle($lastIDInsert, $fileName);
            // BUILD DỮ LIỆU NHẬP VÀO Ở TEXTAERA VÀO FILE TXT
            $rawContentArticle = $_POST['content-article'];
            $stringContentArticle = "";
            // tách từng dòng thành mảng. mỗi mảng là 1 dòng. 
            // một mảng tạm để tiện xử lý
            $linesRawData = preg_split('/\r\n|\r|\n/', $rawContentArticle);
            // mảnh chính thức, mỗi phần tử là một dòng của bài báo
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
            // lọc từng dòng trong danh sách hình ảnh
            while(isset($_FILES["imageArticle_".$index]) && 
            isset($_POST["imageArticle_row_".$index]) &&
             isset($_POST["labelArticle_".$index]))
            {
                // print_r($index);

                $FileImage = $_FILES["imageArticle_".$index];
                $rowDisplayImage = $_POST["imageArticle_row_".$index];
                $imageLabel = $_POST["labelArticle_".$index];
                // lọc qua từng dòng của bài báo
                for ($i = 0; $i < count($lineData); $i++)
                {
                    // nếu dòng đang duyệt bằng dòng đã nhập ở thẻ input
                    if($i ==( $rowDisplayImage -1))
                    {
                        // // thêm dòng mới ngay dòng đang xét với cấu trúc như sau
                        // [img]
                        // mô tả ảnh
                        $lineData[$i] .= ("\n[img]\n".$imageLabel."");
                        require_once "./Upload.php";
                        $uploader = new Upload();
                        $fileName = $uploader->UploadImageArticle($lastIDInsert, $FileImage);
                        // thêm ký tự phân cách giữa các hình ảnh
                        $arrayImage[$i+1] .= $fileName ."|";
                    }
                    
                }
                $index++;
            }
            // chuyển đổi mảng chứa các dòng của bài báo thành 1 chuỗi
            foreach ($lineData as $lines)
            {
                $stringContentArticle .= $lines."\n";

            }
            // chuyển đổi mảng các tên hình ảnh có trong bài báo thành 1 chuỗi, giữa các hình ảnh cách nhau bởi dấu |
            $stringImageList = "";
            foreach($arrayImage as $img)
            {
                // loại bỏ việc thừa dấu |
                if($img != "")
                    $stringImageList .= trim($img, "|")."|";

            }
            // Loại bỏ dấu | cuối cùng nếu có
            $stringImageList = rtrim($stringImageList, "|");

            $artDAO->addListImage($lastIDInsert, $stringImageList);
            // lưu file txt
            $f = fopen("../ArticleData/".$lastIDInsert.".txt", "w+");
            fwrite($f, $stringContentArticle);
            fclose($f);

        }
        

    }
   header("Location: ../../public/admin/listArticleAdmin.php");
?>