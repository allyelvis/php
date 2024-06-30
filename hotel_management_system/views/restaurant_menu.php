<!DOCTYPE html>
<html>
<head>
    <title>Restaurant Menu</title>
</head>
<body>
    <h1>Restaurant Menu</h1>
    <ul>
        <?php foreach ($data as $item): ?>
            <li><?php echo $item['name']; ?> - $<?php echo number_format($item['price'], 2); ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
