<?php

// Duplicated from wordInText.php, can be required if needed.
// require 'wordsInText.php';
function getWords(string $text) {
    $text = strtolower($text);
    $text = preg_replace("/[^-A-Za-z0-9 ]/", '', $text);

    $text_array = explode(' ', $text);
    $text_array = array_count_values($text_array);

    return $text_array;
}

function getUniqueWords(string $text) {
    $text_array = getWords($text);

    $unique = [];
    foreach ($text_array as $word => $count) {
        if ($count === 1) {
            $unique[] = $word;
        }
    }

    return $unique;
}

echo '<pre>';
var_dump(
    getUniqueWords(
        file_get_contents('sample.txt')
    )
);
echo '</pre>';
