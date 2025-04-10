<?php
class User {
    private $UID;
    private $Username;
    private $Password;
    private $fullName;
    private $email;
    private $RoleID;
    private $Rolename;

    function __construct( $Username, $Password,$fullName,$email, $RoleID, $Rolename) {

        $this->Username = $Username;
        $this->Password = $Password;
        $this->fullName = $fullName;
        $this->email = $email;
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
    public function getFullname() {
        return $this->fullName;
    }

    public function setUsername($Username) {
        $this->Username = $Username;
    }

    // Getter và Setter cho Password
    public function getPassword() {
        return $this->Password;
    }
    public function getEmail() {
        return $this->email;
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
