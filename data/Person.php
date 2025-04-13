<?php

require_once "data/SayGoodBye.php";

use Data\SayGoodBye;

trait HasName
{
    public string $name;
}

class Person
{
    use SayGoodBye, HasName;
}


$person = new Person();
$person->goodBye("ga");
$person->name = "akmal";
echo "Name is : {$person->name}";