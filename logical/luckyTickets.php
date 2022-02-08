<?php

function getLuckyNumbers() {
    $lucky_numbers = [];

    for ($i=0; $i<=27; $i++) {
        $val = [];

        foreach (range(0,9) as $j) {
            foreach (range(0,9) as $k) {
                foreach (range(0,9) as $l) {
                    if ($j + $k + $l === $i) {
                        $val[] = $j . $k . $l;
                    }
                }
            }
        }

        for ($j=0; $j<count($val); $j++) {
            foreach ($val as $item) {
                $lucky_numbers[] = $val[$j] . $item;
            }
        }
    }

    return $lucky_numbers;
}
echo '<pre>';
var_dump(getLuckyNumbers());
echo '</pre>';
