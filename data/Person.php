<?php

require_once "data/SayGoodBye.php";

namespace Data;

use Data\SayGoodBye;

trait HasName
{
    public string $name;
}

trait CanRun
{
    public abstract function run(): void;
}
class Person
{
    use SayGoodBye, HasName, CanRun;

    // abstract function
    public function run(): void
    {
        echo " Person {$this->name} is running" . PHP_EOL;
    }

    public function goodBye(?string $name): void
    {
        echo "Override trait SayGoodBye " . PHP_EOL;
    }
}


$person = new Person();
// goodbye telah di override
$person->goodBye("ga");
$person->name = "akmal";
echo "Name is : {$person->name}" . PHP_EOL;
// abstract function
$person->run();