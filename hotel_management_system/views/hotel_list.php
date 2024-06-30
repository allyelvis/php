<!DOCTYPE html>
<html>
<head>
    <title>Hotel List</title>
</head>
<body>
    <h1>Hotels</h1>
    <ul>
        <?php foreach ($data as $hotel): ?>
            <li><?php echo $hotel['name']; ?> - <?php echo $hotel['address']; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
