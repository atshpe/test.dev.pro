<?php

function arrayElementsSum(array $data) {

    // to disable displaying warnings
    // error_reporting(E_ERROR | E_PARSE);

    $callback = function ($values) use (&$callback) {
        $i = 0;
        foreach ($values as $item) {
            $i++;
            $i += $callback($item);
        }

        return $i;
    };

    $sum = 0;
    foreach ($data as $item) {
        $sum++;
        $sum += $callback($item);
    }

    return $sum;
}

$array = [
    [
        'name' => 'John',
        'age' => 30,
        'location' => [
            'city' => 'London',
            'country' => 'UK',
        ],
    ],
    [
        'name' => 'Jane',
        'age' => 28,
    ],
    [
        'name' => 'Jack',
        'age' => 33
    ]
];

echo '<pre>';
var_dump(arrayElementsSum($array));
echo '</pre>';
