<?php

class Bicycle
{
    public string $color;
    public int $currentSpeed;
    public int $nbSeats = 1;
    public int $nbWheels = 2;
    public function forward(): string
{
    $this->currentSpeed = 15;
    return "Go !";
}


public function brake(): string
{
   $sentence = "";
   while ($this->currentSpeed > 0) {
       $this->currentSpeed--;
       $sentence .= "Brake !!!";
   }
   $sentence .= "I'm stopped !";
   return $sentence;
}

public function dump()
{
    var_dump($this);
}
public function getCurrentSpeed(): int
{
    return $this->currentSpeed;
}

public function setCurrentSpeed(int $currentSpeed): void
{
    if($currentSpeed >= 0) {
    $this->currentSpeed = $currentSpeed;
}
function __construct(string $color)
{
    $this->color = $color;
}
}
}