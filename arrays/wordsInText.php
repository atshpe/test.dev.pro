<?php

function getWords(string $text) {
    $text = strtolower($text);
    $text = preg_replace("/[^-A-Za-z0-9 ]/", '', $text);

    $text_array = explode(' ', $text);
    $text_array = array_count_values($text_array);

    return $text_array;
}

echo '<pre>';
var_dump(
    getWords(
        file_get_contents('sample.txt')
    )
);
echo '</pre>';
