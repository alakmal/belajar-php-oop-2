<?php


namespace Data;

interface HasBrand
{

    function getBrand(): string;
}

interface Ismaintenance
{
    function Ismaintenance(): bool;
}

interface Car extends HasBrand
{
    function drive(): void;

    function getTire(): int;
}
// impelemntasi interface
class Avanza implements Car, Ismaintenance
{

    function drive(): void
    {
        echo "Drive Avanza" . PHP_EOL;
    }

    function getTire(): int
    {
        return 4;
    }

    public function getBrand(): string
    {
        return "Toyota";
    }

    public function Ismaintenance(): bool
    {
        return false;
    }
}