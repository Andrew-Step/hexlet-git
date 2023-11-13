<?php

function bubbleSort($coll)
{
    $size = count($coll);
    $isSort = true;
    while ($isSort) {
        $isSort = false;
        for ($i = 0; $i < ($size - 1); $i++) {
            if ($coll[$i] > $coll[$i + 1]) {
                $temp = $coll[$i];
                $coll[$i] = $coll[$i + 1];
                $coll[$i + 1] = $temp;

                $isSort = true;
            }
        }
        $size--;
    }

    return $coll;
}

$coll = [-2, 0, -5, 2, -1, 1, 5, 2];

print_r(bubbleSort($coll));