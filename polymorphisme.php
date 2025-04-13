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
$company->programmer = new BackEndProgrammer('Eko');
$company->programmer = new FrontEndProgrammer("eko");