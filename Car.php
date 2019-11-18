<?php

require_once 'Vehicle.php';

class Car extends Vehicle implements LightableInterface
{
    /**
     * @var string
     */
    private $energy;

    /**
     * @var int
     */
    private $energyLevel;

    /**
     * @var bool
     */
    private $HasParkBrake = true;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }

    public function getParkBrake()
    {
        return $this->HasParkBrake;
    }
    public function setParkBrake()
    {
        $this->HasParkBrake = false;
    }

    public function start()
    {
        if ($this->HasParkBrake) {
            throw new Exception("Parkbrake on.");
        }
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): void
    {
        $this->energy = $energy;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function switchOn(): string
    {
        return "true";
    }

    public function switchOff(): string
    {
        return "false";
    }
}