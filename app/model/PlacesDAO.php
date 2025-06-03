<?php
class PlaceDAO {
    private $conn;

    public function __construct() {
        $this->conn = mysqli_connect("localhost", "root", "", "dulich");
        if (!$this->conn) {
            die("Kết nối cơ sở dữ liệu thất bại: " . mysqli_connect_error());
        }
        mysqli_set_charset($this->conn, "utf8");
    }

    public function getConnection() {
        return $this->conn;
    }

    public function getListPlaceQuery($sql) {
        return mysqli_query($this->conn, $sql);
    }

    public function getPlaceById($id) {
        $sql = "SELECT * FROM places WHERE id = $id";
        $result = mysqli_query($this->conn, $sql);
        return mysqli_fetch_assoc($result);
    }

    public function addPlace($name, $description, $image, $location) {
        $stmt = $this->conn->prepare("INSERT INTO places (name, description, image, location) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $name, $description, $image, $location);
        return $stmt->execute();
    }

    public function updatePlace($id, $name, $description, $image, $location) {
        $stmt = $this->conn->prepare("UPDATE places SET name=?, description=?, image=?, location=? WHERE id=?");
        $stmt->bind_param("ssssi", $name, $description, $image, $location, $id);
        return $stmt->execute();
    }

    public function deletePlace($id) {
        $stmt = $this->conn->prepare("DELETE FROM places WHERE id=?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}
?>
