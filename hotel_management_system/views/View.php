<?php
class View {
    public function render($template, $data = []) {
        extract($data);
        include $template;
    }
}
?>
