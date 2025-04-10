<?php
    class Article{
        private $ArtID;
        private $CatID;
        private $TimeModify;
        private $StaffID;
        private $Title;

        function __construct($ArtID, $CatID, $TimeModify, $StaffID, $Title)
        {
            $this->ArtID = $ArtID;
            $this->CatID = $CatID;
            $this->TimeModify = $TimeModify;
            $this->StaffID = $StaffID;
            $this->Title = $Title;

        }
        
    }

?>