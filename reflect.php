<?php

require_once "data/LoginRequest.php";
require_once "data/ValidationUtil.php";

use Data\{LoginRequest, ValidationUtil};


$login = new LoginRequest();
$login->username = "akmal";


try {
    ValidationUtil::validateReflection($login);
    echo "berhasil " . PHP_EOL;
} catch (\Exception $exception) {
    echo "errror : {$exception->getMessage()} " . PHP_EOL;
}