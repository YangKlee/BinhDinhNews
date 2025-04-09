<?php
class User {
    private $UID;
    private $Username;
    private $Password;
    private $RoleID;
    private $Rolename;

    function __construct($UID, $Username, $Password, $RoleID, $Rolename) {
        $this->UID = $UID;
        $this->Username = $Username;
        $this->Password = $Password;
        $this->RoleID = $RoleID;
        $this->Rolename = $Rolename;
    }

    // Getter và Setter cho UID
    public function getUID() {
        return $this->UID;
    }

    public function setUID($UID) {
        $this->UID = $UID;
    }

    // Getter và Setter cho Username
    public function getUsername() {
        return $this->Username;
    }

    public function setUsername($Username) {
        $this->Username = $Username;
    }

    // Getter và Setter cho Password
    public function getPassword() {
        return $this->Password;
    }

    public function setPassword($Password) {
        $this->Password = $Password;
    }

    // Getter và Setter cho RoleID
    public function getRoleID() {
        return $this->RoleID;
    }

    public function setRoleID($RoleID) {
        $this->RoleID = $RoleID;
    }

    // Getter và Setter cho Rolename
    public function getRolename() {
        return $this->Rolename;
    }

    public function setRolename($Rolename) {
        $this->Rolename = $Rolename;
    }
}
?>
