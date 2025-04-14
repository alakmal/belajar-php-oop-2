<?php

require_once "data/Student.php";

use Data\Student;

$student = new Student();
$student->id = "1";
$student->name = "Eko";
$student->value = 100;


echo $student->__toString();