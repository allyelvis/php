<!DOCTYPE html>
<html>
<head>
    <title>Bill List</title>
</head>
<body>
    <h1>Bills</h1>
    <ul>
        <?php foreach ($data as $bill): ?>
            <li><?php echo $bill['reservation_id']; ?> - $<?php echo number_format($bill['amount'], 2); ?> - <?php echo $bill['billing_date']; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
