<?php
$staff = ["Frederick", "Lily", "Pierre", "Edward", "Marcus", "Ucup"];
$foods = ["Tempe", "Omelette", "Curry", "Salad", "Pasta"];
$dynamicArray = ["Nintendo", 64, true, 19.96];

var_dump($staff);
echo "<br>";

print_r($foods);
echo "<br>";

print_r($dynamicArray);
echo "<br>" . "<br>";

echo "There are exactly " . count($staff). " employees in this business. Which are: ";
foreach($staff as $employee) {
    if ($employee === end($staff)) {
        echo "and " . $employee . ".";
        break;
    }
    echo $employee . ", ";
}  

?>