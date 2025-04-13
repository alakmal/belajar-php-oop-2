<?php


namespace Data;

class Programmer
{
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}

class BackEndProgrammer extends Programmer {}

class FrontEndProgrammer extends Programmer {}