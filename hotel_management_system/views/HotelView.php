<?php
class HotelView {
    public function render($template, $data = []) {
        extract($data);
        include $template;
    }
}
?>
