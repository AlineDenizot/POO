<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{
    /**
    * @var integer
    */
    private $storageCapacity;
    /**
    * @var integer
    */
    private $cargo = 0;
    /**
    * @var string
    */
    private $energy;    

    public function __construct(int $storageCapacity, string $color, int $nbSeats, string $energy)
    {
    parent::__construct($color, $nbSeats);
    $this->energy = $energy;
    $this->storageCapacity = $storageCapacity;
    }

    public function load(): string
    {
        if ($this->cargo <= $this->storageCapacity) {
            return "In filling";
        } else {
            return "Full !";
        }
    }
}



