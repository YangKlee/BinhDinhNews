<?php
class staff extends User {
    private $adias;

    public function __construct($UID, $Username, $Password, $RoleID, $Rolename, $adias) {
        // Gọi constructor của lớp cha (User)
        parent::__construct($UID, $Username, $Password, $RoleID, $Rolename);
        $this->adias = $adias;
    }

    // Getter cho adias
    public function getAdias() {
        return $this->adias;
    }

    // Setter cho adias
    public function setAdias($adias) {
        $this->adias = $adias;
    }
}
?>
