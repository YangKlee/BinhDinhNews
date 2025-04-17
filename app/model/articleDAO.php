<?php
    require_once '../app/config/database.php';
    require_once '../app/model/Article.php';
    class articleDAO{
        private $conn;
        function __construct()
        {
            $this->conn = DatabaseConnection::getConnection();
        }
        function getListArticle($query)
        {
            return mysqli_query($this->conn, $query);
            
        }
        function getArticle($id)
        {
            $stm = $this->conn->prepare("Select ID_Art, ID_Cat, Time_modify, StaffID, Title from Article
             where ID_Art= ?");
            $stm->execute([$id]);
            $stm->bind_result($ArtID, $CatID, $TimeModify, $StaffID, $Title);
            $stm->fetch();
            return new Article($ArtID, $CatID, $TimeModify, $StaffID, $Title);
            
        }
    }
?>