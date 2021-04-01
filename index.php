<?php
require_once 'Car.php';
require_once 'Bicycle.php';

$bike = new Bicycle();
var_dump($bike);

$bike->color = 'blue';
$bike->currentSpeed = 0;
var_dump($bike);

echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
echo $bike->brake();

$rockrider = new Bicycle();
$rockrider->color = 'yellow';
$tornado = new Bicycle();
$tornado->color = 'black';

$tornado->forward();

var_dump($bike);
$bike->dump();
