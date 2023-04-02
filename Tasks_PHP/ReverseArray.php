<?php

function reverseArray($coll) 
{
    $size = count($coll);
    $maxIndex = floor($size / 2);

    for ($i = 0; $i < $maxIndex; $i++) {
        $mirrorIndex = $size - $i - 1;
        $temp = $coll[$i];                  //введение временной переменной для промежуточного хранения результата;
        $coll[$i] = $coll[$mirrorIndex];
        $coll[$mirrorIndex] = $temp;
    }

    return $coll;
}

print_r(reverseArray([1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11]));