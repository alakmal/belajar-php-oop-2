<?php



class Data implements IteratorAggregate
{

    public string $first = "First";
    public string $second = "Second";
    private string $third = "Third";
    protected string $fourth = "Foourth";


    public function getIterator(): Traversable
    {
        return new ArrayIterator([
            "first" => $this->first,
            "second" => $this->second,
            "third" => $this->third,
            "fourth" => $this->fourth,
        ]);
    }
}

$data = new Data();

var_dump($data->getIterator());