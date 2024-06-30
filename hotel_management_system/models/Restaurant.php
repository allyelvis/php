<?php
require_once '../config/config.php';

class Restaurant {
    private $db;

    public function __construct() {
        global $link;
        $this->db = $link;
    }

    public function getMenuItems() {
        $sql = "SELECT * FROM restaurant_items";
        $result = mysqli_query($this->db, $sql);

        $items = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $items[] = $row;
        }
        return $items;
    }
}
?>
