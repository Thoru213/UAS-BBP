<?php
$databaseHost = 'localhost';
$databaseName = 'cobauas';
$databaseUsername = 'root';
$databasePasword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePasword, $databaseName);

if (!$mysqli) {
    die("Connection failed: " . mysqli_connect_error());
}

function enum($query){
    global $mysqli;
    $result = $mysqli->query("SHOW COLUMNS FROM antrian WHERE Field = '$query'");
    $row = $result->fetch_row();
    $enumList = explode(",", str_replace("'", "", substr($row[1], 5, (strlen($row[1])-6))));
    return $enumList;
}

function ceklogin() {
    if (!isset($_SESSION["loggedin"])) {
        header('Location: index.php');
        exit;
    }
}
class Admin {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getAllEntries() {
        $query = "SELECT * FROM antrian";
        $result = $this->db->query($query);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function deleteEntry($id) {
        $query = "DELETE FROM antrian WHERE id = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('i', $id);
        $stmt->execute();
    }

    public function updateStatus($id, $status) {
        $query = "UPDATE antrian SET status = ? WHERE id = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('si', $status, $id);
        $stmt->execute();
    }
}

class User {
    private $mysqli;

    public function __construct($mysqli) {
        $this->mysqli = $mysqli;
    }

    public function getApprovedRisks() {
        $query = "SELECT * FROM antrian WHERE status = 'approved'";
        return $this->mysqli->query($query);
    }
}
?>