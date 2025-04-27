<?php
class Category {
    private $CatID;
    private $CatName;
    private $CatSlug;

    // Constructor
    public function __construct($CatID = null, $CatName = null, $CatSlug = null) {
        $this->CatID = $CatID;
        $this->CatName = $CatName;
        $this->CatSlug = $CatSlug;
    }

    // Getter and Setter for CatID
    public function getCatID() {
        return $this->CatID;
    }

    public function setCatID($CatID) {
        $this->CatID = $CatID;
    }

    // Getter and Setter for CatName
    public function getCatName() {
        return $this->CatName;
    }

    public function setCatName($CatName) {
        $this->CatName = $CatName;
    }

    // Getter and Setter for CatSlug
    public function getCatSlug() {
        return $this->CatSlug;
    }

    public function setCatSlug($CatSlug) {
        $this->CatSlug = $CatSlug;
    }
}
?>
