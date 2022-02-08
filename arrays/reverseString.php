<?php

function reverseString($string) {
    $string .= PHP_EOL;

    $length = 0;
    while ($string[$length] !== PHP_EOL) $length++;

    $reversed = '';
    for ($i=$length-1; $i>=0; $i--) {
        $reversed .= $string[$i];
    }

    return $reversed;
}

echo reverseString('Seems like it works!');
