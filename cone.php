<?php

$radius = 5;
$height = 10;

$lateralArea = pi() * $radius * sqrt($height**2 + $radius**2);
$baseArea = pi() * $radius**2;
$totalArea = $lateralArea + $baseArea;

echo "Let's get values of a cone from radius and height";
echo "Radius: $radius cm" . PHP_EOL;
echo "Height: $height cm" . PHP_EOL;
echo "Lateral area: $lateralArea cm²" . PHP_EOL;
echo "Base area: $baseArea cm²" . PHP_EOL;
echo "Total area: $totalArea cm²" . PHP_EOL;

?>