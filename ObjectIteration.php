<?php



class Data
{

    public string $first = "First";
    public string $second = "Second";
    private string $third = "Third";
    protected string $fourth = "Foourth";
}

$data = new Data();

foreach ($data as $key => $value) {
    echo "$key : $value " . PHP_EOL;
}