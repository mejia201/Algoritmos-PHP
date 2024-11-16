<?php

function quickSort($arr) {
    if (count($arr) < 2) {
        return $arr;
    }

    $left = $right = [];
    reset($arr);
    $pivot_key = key($arr);
    $pivot = array_shift($arr);

    foreach ($arr as $k => $v) {
        if ($v < $pivot) {
            $left[$k] = $v;
        } else {
            $right[$k] = $v;
        }
    }

    return array_merge(quickSort($left), [$pivot], quickSort($right));
}

$arr = [64, 34, 25, 12, 22, 11, 90];
$arrayOrdenado = quickSort($arr);
print_r($arrayOrdenado);

?>