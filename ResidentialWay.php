<?php

require_once 'HighWay.php';

final class ResidentialWay extends HighWay {
    /**
    * @var integer
    */
    protected $nbLane=2;
    /**
    * @var integer
    */
    protected $maxSpeed=50;

    public function addVehicle($vehicle) {
        if ($vehicle instanceof Car
        || $vehicle instanceof Truck
        || $vehicle instanceof Bicycle){
            $newArray = $this->getCurrentVehicles();
            $newArray[]=$vehicle;
            $this->setCurrentVehicles($newArray);
        }
    }
   
}