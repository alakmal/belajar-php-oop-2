<?php

require_once "data/Shape.php";

use Data\{Rectangle};

$rectangle = new Rectangle();
echo "Nilai getCorner parent adalah " . $rectangle->getParentCorner() . PHP_EOL;

echo "Nilai getCorner self adalah " . $rectangle->getCorner() . PHP_EOL;