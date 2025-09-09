<?php
$rides = [
    [
        "name"=> "Diamond Wheel",
        "rideNumber"=> "01",
        "category"=> "calm_rides",
        "img" => "ferrisWheel.png"
    ],
    [
        "name"=> "The Speed Monsters",
        "rideNumber"=> "02",
        "category"=> "thrill_rides",
        "img" => "goKarts.png"
    ],
    [
        "name"=> "Carousel",
        "rideNumber"=> "03",
        "category"=> "calm_rides",
        "img" => "merryGoRound.png"
    ],
    [
        "name"=> "Iron Giant",
        "rideNumber"=> "04",
        "category"=> "Looping Coasters",
        "img" => "RCLoop.png"
    ],
    [
        "name"=> "Wario's Gold Mine",
        "rideNumber"=> "05",
        "category"=> "Wooden Coasters",
        "img" => "RCWood.png"
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET Rides</title>
</head>
<body>
    <h1>List of Theme Park Rides</h1>
    <ul>
        <?php foreach($rides as $ride) : ?>
            <li>
                <a href="associativeArray.php?name=<?php echo $ride["name"]; ?>
                        &rideNumber=<?php echo $ride["rideNumber"]; ?>
                        &category=<?php echo $ride["category"]; ?>
                        &img=<?php echo $ride["img"]; ?>">
                        <?php echo $ride["name"]; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>