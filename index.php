<?php

require_once 'Car.php';
require_once 'Vehicle.php';
require_once 'Bicycle.php';

$car= new Car ('red', 5, 'electric');
$bicycle = new Bicycle ('red', 1);

var_dump ($car->switchOn()) ;

var_dump ($bicycle->switchOn()) ;

