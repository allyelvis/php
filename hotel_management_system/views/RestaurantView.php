<?php
class RestaurantView {
    public function render($template, $data = []) {
        extract($data);
        include $template;
    }
}
?>
