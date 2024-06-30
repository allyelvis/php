<?php
function sanitize_input($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}
?>
