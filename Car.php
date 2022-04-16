<?php

class Car extends Vehicle
{
    // Constants
    public const  ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    // Properties
    protected string $energy;
    protected int $energyLevel = 50;
    private bool $hasParkBrake;

    // Methods
    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }

    // Getters and Setters
    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function setHasParkBrake(bool $hasParkBrake) : void
    {
        $this->hasParkBrake = $hasParkBrake;
    }

    public function start(): string
    {
        if($this->hasParkBrake){
            throw new Exception('Can\'t start if handbrake is on');
        }
        return "I'm started";
    }
}
