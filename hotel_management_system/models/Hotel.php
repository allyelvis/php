<?php
require_once '../config/config.php';

class Hotel {
    private $db;

    public function __construct() {
        global $link;
        $this->db = $link;
    }

    public function getHotels() {
        $sql = "SELECT * FROM hotels";
        $result = mysqli_query($this->db, $sql);

        $hotels = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $hotels[] = $row;
        }
        return $hotels;
    }
}
?>
