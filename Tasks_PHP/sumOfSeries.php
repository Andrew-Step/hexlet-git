<?php
//Функция, которая считает сумму ряда целых чисел (ряд задаётся двумя числами — начальным и конечным)

function sumOfSeries($firstNum, $lastNum)
{
    $result = 0;

    for ($i = $firstNum; $i <= $lastNum; $i++) {
        $result += $i;
    }
    return $result;
}

print_r(sumOfSeries(4, 7)); // 22