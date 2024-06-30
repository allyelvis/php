<?php
require_once '../models/Hotel.php';
require_once '../views/HotelView.php';

class HotelController {
    private $model;
    private $view;

    public function __construct() {
        $this->model = new Hotel();
        $this->view = new HotelView();
    }

    public function index() {
        $data = $this->model->getHotels();
        $this->view->render('hotel_list.php', $data);
    }
}
?>
