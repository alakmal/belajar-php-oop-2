<?php


namespace Data;


class MathHelper
{
    static public string $name = "Math Helper";

    static public function sum(int ...$numbers): int
    {
        $total = 0;
        foreach ($numbers as $number) {
            $total += $number;
        }

        return $total;
    }
}


echo MathHelper::$name . PHP_EOL;
$total = MathHelper::sum(10, 10, 10, 230, 30);
echo "Total $total" . PHP_EOL;