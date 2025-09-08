<?php
function greet($name) {
    echo greetByTime(). ", $name!"  ;
}

function greetByTime() {
    $time = date("h");
    if ($time == "00" || $time < "12") {
        return "Good Morning";
    } elseif ($time >= "12" && $time < "18") {
        return "Good Afternoon";
    } else {
        return "Good Evening";
    }
}

mktime(0,0,0,0,0,0);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan function</title>
</head>
<body>
    <h1> <?php echo greet("Mr. Freeman") ?> </h1>
    <h2> <?php echo "The time is " . date("h:i:sa") ?> </h2>
    <p> 
        <?php echo date("l", mktime(0,0,0,9,8,2025)); ?> <br>
        <?php 
        echo "Today is ". date("l", mktime(0,0,0,9,8,2025));
        ?> 
    </p>
</body>
</html>