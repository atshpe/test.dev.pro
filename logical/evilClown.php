<?php

function checkForParentheses($emoji) {
    $symbols = ['(', ')'];
    $split = str_split($emoji);

    for ($i=count($split)-1; $i>=0; $i--) {
        if (
            in_array($split[$i], $symbols)
            &&
            in_array($split[$i-1], $symbols)
        ) {
            unset($split[$i]);
        }
    }

    return implode($split);

    // if (preg_match('/[()]{2,}/', $emoji)) {
    //     throw new \Exception("Only one parentheses available in a row");
    // }
    // return $emoji;
}

echo checkForParentheses(':(() ) 8-)');
