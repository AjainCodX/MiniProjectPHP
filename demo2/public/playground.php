<?php

require __DIR__ . "/../vendor/autoload.php";
use Illuminate\Support\Collection;

$numbers = new Collection(
    [
        1,2,3,4,5,6,7,8,9,10
    ]
);

$lessThanEqualto5 = $numbers->filter(function ($number) {
    return $number <= 5;
});

var_dump($lessThanEqualto5);