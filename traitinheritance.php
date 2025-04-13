<?php


require_once "data/SayGoodBye.php";
require_once "data/Person.php";

use Data\{SayGoodBye, HasName, CanRun};


trait All
{
    use SayGoodBye, HasName, CanRun;
}


class Person
{
    use All;
    public function run(): void {}
}