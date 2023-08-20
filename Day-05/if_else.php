<?php 
$temperature = 28; // Assume the temperature in Celsius

if ($temperature > 30) {
    $weather = "hot";
} elseif ($temperature > 20) {
    $weather = "warm";
} else {
    $weather = "cool";
}

echo "The weather today is $weather.";


?>
