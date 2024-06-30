<?php
class BillingView {
    public function render($template, $data = []) {
        extract($data);
        include $template;
    }
}
?>
