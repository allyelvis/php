<?php
require_once '../models/Billing.php';
require_once '../views/BillingView.php';

class BillingController {
    private $model;
    private $view;

    public function __construct() {
        $this->model = new Billing();
        $this->view = new BillingView();
    }

    public function index() {
        $data = $this->model->getBills();
        $this->view->render('bill_list.php', $data);
    }
}
?>
