<?php

function getMirroredText(string $text) {

    $alphabet = array_merge(
        array_combine(range('a', 'z'), range('z', 'a')),
        array_combine(range('A', 'Z'), range('Z', 'A')),
    );

    for ($i=0; $i<strlen($text); $i++) {
        if (in_array($text[$i], $alphabet)) {
            $text[$i] = $alphabet[$text[$i]];
        }
    }

    return $text;
}

echo getMirroredText('Seems like it works!');
