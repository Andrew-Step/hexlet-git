<?php
//Функция, которая находит в массиве непрерывные возрастающие последовательности чисел и возвращает массив с их перечислением.

function summaryRanges($coll)
{
    $result = [];
    $size = count($coll);
    $numberRange = [];
    for ($i = 0; $i < $size - 1; $i++) {
        if ($coll[$i] === $coll[$i + 1] - 1) {
            $numberRange[] = $coll[$i];
            $numberRange[] = $coll[$i + 1];
        } else {
            if (!empty($numberRange)) {
                $result[] = "{$numberRange[0]}->{$numberRange[count($numberRange) - 1]}";
            }
            $numberRange = [];
        }
    }
    if (!empty($numberRange)) {
        $result[] = "{$numberRange[0]}->{$numberRange[count($numberRange) - 1]}";
    }

    return $result;
}

$coll = [110, 111, 112, 111, -5, -4, -2, -3, -4, -5, 2, 3, 4, 5, 1, 1, -1, 4, 24, 25, 26];

print_r(summaryRanges($coll)); //   ['110->112', '-5->-4', '2->5', '24->26']