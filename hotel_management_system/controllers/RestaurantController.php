<?php
require_once '../models/Restaurant.php';
require_once '../views/RestaurantView.php';

class RestaurantController {
    private $model;
    private $view;

    public function __construct() {
        $this->model = new Restaurant();
        $this->view = new RestaurantView();
    }

    public function index() {
        $data = $this->model->getMenuItems();
        $this->view->render('restaurant_menu.php', $data);
    }
}
?>
