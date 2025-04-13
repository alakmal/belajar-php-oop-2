<?php

require_once "data/Programmer.php";

use Data\{Programmer, BackEndProgrammer, FrontEndProgrammer};

class Company
{
    public Programmer $programmer;
}

// Ppolymorphisme

$company = new Company();
$company->programmer = new Programmer("Eko");
echo $company->programmer instanceof Programmer . PHP_EOL;
$company->programmer = new BackEndProgrammer('Eko');
echo $company->programmer instanceof Programmer . PHP_EOL;

$company->programmer = new FrontEndProgrammer("eko");
echo $company->programmer instanceof Programmer . PHP_EOL;


// type cast
function sayHello(Programmer $programmer)
{
    if ($programmer instanceof BackEndProgrammer) {
        echo "Hello Backend Programmer {$programmer->name}" . PHP_EOL;
    } else if ($programmer instanceof FrontEndProgrammer) {
        echo "Hello Frontend Programmer {$programmer->name}" . PHP_EOL;
    } else if ($programmer instanceof Programmer) {
        echo "Hello Programmer {$programmer->name}" . PHP_EOL;
    }
}

sayHello(new Programmer("Eko"));
sayHello(new BackEndProgrammer("Budi"));
sayHello(new BackEndProgrammer("Joko"));