<?php
require_once '../config/config.php';
require_once '../controllers/HotelController.php';

$controller = new HotelController();
$controller->index();
?>
