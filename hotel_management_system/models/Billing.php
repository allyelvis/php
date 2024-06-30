<?php
require_once '../config/config.php';

class Billing {
    private $db;

    public function __construct() {
        global $link;
        $this->db = $link;
    }

    public function getBills() {
        $sql = "SELECT * FROM bills";
        $result = mysqli_query($this->db, $sql);

        $bills = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $bills[] = $row;
        }
        return $bills;
    }
}
?>
