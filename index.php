<?php

require_once 'HighWay.php';
require_once 'Vehicle.php';
require_once 'Truck.php';
require_once 'Car.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';
require_once 'MotorWay.php';
require_once 'Bicycle.php';
require_once 'Skateboard.php';

$car = new Car('blue', 4, 'fuel');

try {
    $car->start();
} catch(Exception $e) {
    $car->setParkBrake();
    echo "Exception received : " . $e->getMessage();
    var_dump($car);
} finally {
    echo "Ma voiture roule comme un donut";
}
