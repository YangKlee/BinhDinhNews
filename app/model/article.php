<?php
class Article {
    private $ArtID;
    private $CatID;
    private $TimeModify;
    private $StaffID;
    private $Title;

    public function __construct($ArtID, $CatID, $TimeModify, $StaffID, $Title)
    {
        $this->ArtID = $ArtID;
        $this->CatID = $CatID;
        $this->TimeModify = $TimeModify;
        $this->StaffID = $StaffID;
        $this->Title = $Title;
    }

    // Getters
    public function getArtID() {
        return $this->ArtID;
    }

    public function getCatID() {
        return $this->CatID;
    }

    public function getTimeModify() {
        return $this->TimeModify;
    }

    public function getStaffID() {
        return $this->StaffID;
    }

    public function getTitle() {
        return $this->Title;
    }

    // Setters
    public function setArtID($ArtID) {
        $this->ArtID = $ArtID;
    }

    public function setCatID($CatID) {
        $this->CatID = $CatID;
    }

    public function setTimeModify($TimeModify) {
        $this->TimeModify = $TimeModify;
    }

    public function setStaffID($StaffID) {
        $this->StaffID = $StaffID;
    }

    public function setTitle($Title) {
        $this->Title = $Title;
    }
}
?>
