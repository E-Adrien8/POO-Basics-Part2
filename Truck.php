<?php

declare(strict_types=1);

class Truck extends Vehicle
{
    private int $maxLoading;
    private int $storageCapacity;




    public function __construct(string $color, int $nbSeats, int $maxLoading)
    {
        parent::__construct($color, $nbSeats);
        $this->maxLoading = $maxLoading;
    }

   public function setCapacity(int $maxLoading){
    $this -> maxLoading = $maxLoading;
    }
    public function setstorageCapacity(int $storageCapacity): int  {
        return $this -> storageCapacity = $storageCapacity;
    }

    public function getStock(): int {
        return $this -> storageCapacity;
    }

    public function reallyEmptyTruck(): string
    {
        if ($this->storageCapacity > 200)
            return "The truck is too full ";
        if ($this->storageCapacity === 200)
            return " No more loading than " . $this->maxLoading;
        else
            return " You can go to " . $this -> maxLoading;
    }
}

