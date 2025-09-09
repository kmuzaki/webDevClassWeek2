<?php
// Check if there is no data in $_GET
if (!isset($_GET["name"]) ||
    !isset($_GET["rideNumber"]) ||
    !isset($_GET["category"]) ||
    !isset($_GET["img"])) {
    // redirect to getRides.php
    header("Location: getRides.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rides' Details</title>
</head>
<body>
    <ul>
        <li><img src="img/<?php echo $_GET["img"]; ?>"></li>
        <li><?php echo $_GET["name"]; ?></li>
        <li><?php echo $_GET["rideNumber"]; ?></li>
        <li><?php echo $_GET["category"]; ?></li>
    </ul>

    <a href="getRides.php">Back to main menu</a>
    
</body>
</html>