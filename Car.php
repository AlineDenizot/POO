<?php

require_once 'Vehicle.php';
require_once 'LightableInterface.php';

class Car extends Vehicle implements LightableInterface
{
    public function switchOn()
    {
        return true;
    }

    public function switchOff()
    {
        return false;
    }

    
    private $hasParkBrake=true;
    
    public function setParkBrake(bool $hasParkBrake): void
    {
        $this->hasParkBrake = $hasParkBrake;
    }

    public function getParkBrake()
    {
        return $this->hasParkBrake ;
    }

    public function start()
    {
    if ($this->hasParkBrake == true) {
        throw new Exception("Frein à main actif ");
    }
    }

    //instruction demandé dans les autres quêtes
    
    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    private $energy;
    private $energyLevel;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
    parent::__construct($color, $nbSeats);
    $this->energy = $energy;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Car
{
    if (in_array($energy, self::ALLOWED_ENERGIES)) {
        $this->energy = $energy;
    }
    return $this;
}

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }
}