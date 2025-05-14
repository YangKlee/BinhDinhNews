<?php
    // Gọi thư viện đã xây sẵn
    require_once '../config/database.php';
    class articleDAO{
        // get connection thông qua lớp Database Connection để tiện lợi hơn
        function getConnection()
        {
            $dbConnect =  new DatabaseConnection();
            return $dbConnect->getConnection();
        }
        // lấy dữ liệu bài báo và trả về dạng  ???
        function getListArticleQuery($query)
        {
            // get connection
            $conn = $this->getConnection();
            // thực hiện query từ chuỗi query tham số
            $kqua = mysqli_query($conn,$query);
            // đóng kết nối
            mysqli_close($conn);

            return $kqua;


        }
        function getArticle($id)
        {
            $conn = $this->getConnection();
            // thực hiện query từ chuỗi query tham số
            $kqua = mysqli_query($conn,"Select * from Article where ArticleID = ".$id."");
            // đóng kết nối
            mysqli_close($conn);

            return $kqua;
        }
        function addArticleHeader($title, $tag,  $authorID, $authorGuestName ,$catID, $status )
        {
            $currTime = new DateTime();
            $stringSQLTime = $currTime->format('d-m-Y');
            $conn = $this->getConnection();
            if($authorID == null)
            {
                mysqli_query($conn, "INSERT INTO `article`(`Time_modify`, `AuthorID`, `AuthorGuestName`, `CategoryID`, `Title`, `Tags`, `ArticleStatus`) 
                VALUES ('".$stringSQLTime."', NULL, '".$authorGuestName."', '".$catID."', '".$title."', '".$tag."', '".$status."')");
            }
            else{
                mysqli_query($conn, "INSERT INTO `article`(`Time_modify`, `AuthorID`, `AuthorGuestName`, `CategoryID`, `Title`, `Tags`, `ArticleStatus`) 
            VALUES ('".$stringSQLTime."', ".$authorID.", NULL, '".$catID."', '".$title."', '".$tag."', '".$status."')");
            }
            
            mysqli_close($conn);
        }
    }
?>