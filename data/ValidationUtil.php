<?php


namespace Data;

use Data\LoginRequest;
use Exception;
use ReflectionClass;
use ReflectionProperty;

class ValidationUtil
{

    static function validate(LoginRequest $loginRequest)
    {

        if (!isset($loginRequest->username)) {
            throw new Exception("username is null");
        } else if (!isset($loginRequest->password)) {
            throw new Exception("password is null");
        }
    }

    static function validateReflection($request)
    {

        $reflection = new ReflectionClass($request);
        $properties = $reflection->getProperties(ReflectionProperty::IS_PUBLIC);

        foreach ($properties as $property) {
            if (!$property->isInitialized($request)) {
                throw new Exception("{$property->name} is not set");
            } else if (is_null($property->getValue($request))) {
                throw new Exception("{$property->name} is null");
            }
        }
    }
}