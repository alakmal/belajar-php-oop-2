<?php

namespace Data;

class SocialMedia
{
    public string $name;
}

class Facebook extends SocialMedia
{

    final public function login(string $username, string $password): void {}
}


class FakeFacebook extends Facebook
{

    //error
    //     final public function login(string $username, string $password): void {}
}