<?php

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 12, 13, 14, 15, 16];
//$arr = [1, 2, 4, 5, 6];
//$arr = [];
$findNumbers = [];

if (!count($arr)) {
    $findNumbers[] = 1;
} else {
    foreach ($arr as $id => $number) {

        if (!isset($arr[$id + 1])) {
            continue;
        }

        if ($arr[$id + 1] - $number !== 1) {
            for ($i = 1; $i < $arr[$id + 1] - $number; $i++) {
                $findNumbers[] = $arr[$id + 1] - $i;
            }
        }
    }
}

var_dump($findNumbers);