<?php

require_once 'HighWay.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';
require_once 'Truck.php';
require_once 'Bicycle.php';
require_once 'Car.php';

//Voies à tester
$motor = new MotorWay;
$pedestrian = new PedestrianWay;
$residential = new ResidentialWay;

//Vehicules à tester
$truck = new Truck(4, 'blue', 3, 'fuel');
$bike = new Bicycle('red', 2);
$car= new Car ('red', 5, 'electric');

//Test pour MotorWay
var_dump($motor->getCurrentVehicles());
$motor->addVehicle($bike);
$motor->addVehicle($truck);
$motor->addVehicle($car);
var_dump($motor->getCurrentVehicles());

//Test pour PedestrianWay
var_dump($pedestrian->getCurrentVehicles());
$pedestrian->addVehicle($bike);
$pedestrian->addVehicle($truck);
$pedestrian->addVehicle($car);
var_dump($pedestrian->getCurrentVehicles());

//Test pour ResidentialWay
var_dump($residential->getCurrentVehicles());
$residential->addVehicle($bike);
$residential->addVehicle($truck);
$residential->addVehicle($car);
var_dump($residential->getCurrentVehicles());