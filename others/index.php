<?php
$name = "Kabin";
$role = "Backend Engineer";
$experience = 3;
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Info Example</title>
</head>
<body>

    <h1>User Information</h1>

    <p>Name: <?php echo $name; ?></p>
    <p>Role: <?php echo $role; ?></p>
    <p>Experience: <?php echo $experience; ?> years</p>

    <?php if ($experience >= 3): ?>
        <p>Experienced Developer</p>
    <?php else: ?>
        <p>Junior Developer</p>
    <?php endif; ?>

</body>
</html>