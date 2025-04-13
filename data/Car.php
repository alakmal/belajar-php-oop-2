<?php


namespace Data;

interface Car
{
    function drive(): void;

    function getTire(): int;
}
// impelemntasi interface
class Avanza implements Car
{

    function drive(): void
    {
        echo "Drive Avanza" . PHP_EOL;
    }

    function getTire(): int
    {
        return 4;
    }
}