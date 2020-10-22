<?php

require_once 'HighWay.php';

final class MotorWay extends HighWay {

    /**
    * @var integer
    */
    protected $nbLane=4;
    /**
    * @var integer
    */
    protected $maxSpeed=130;

    public function addVehicle($vehicle) {
        if ($vehicle instanceof Car){
            $newArray = $this->getCurrentVehicles();
            $newArray[]=$vehicle;
            $this->setCurrentVehicles($newArray);
        }
    }
}