<?php


require_once "data/ValidationException.php";
require_once "data/LoginRequest.php";

use Data\{LoginRequest, ValidationException};

function validateLoginRequest(LoginRequest $loginRequest)
{
    if (!isset($loginRequest->username)) {
        throw new ValidationException("username is null");
    } else if (!isset($loginRequest->password)) {
        throw new ValidationException("Password is Null");
    } else if ($loginRequest->username == "") {
        throw new \Exception("username is black");
    } else if ($loginRequest->password == "") {
        throw new \Exception("Password is Blank");
    }
}


$loginRequest = new LoginRequest();
$loginRequest->username = "";
$loginRequest->password = "";

try {
    validateLoginRequest($loginRequest);
} catch (ValidationException $exception) {
    echo "Error : {$exception->getMessage()}" . PHP_EOL;
} catch (\Exception $exception) {
    echo "Error : {$exception->getMessage()}" . PHP_EOL;
}