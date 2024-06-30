<?php
require_once '../config/config.php';
require_once '../controllers/HotelController.php';
require_once '../controllers/RestaurantController.php';
require_once '../controllers/BillingController.php';

$hotelController = new HotelController();
$restaurantController = new RestaurantController();
$billingController = new BillingController();

$hotelController->index();
$restaurantController->index();
$billingController->index();
?>
