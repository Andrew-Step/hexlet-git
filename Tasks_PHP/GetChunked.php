<?php
//Функция, которая принимает на вход массив и число, задающее размер чанка (куска). Функция должна вернуть массив, состоящий из чанков указанной размерности.
//Без использования встроенной в PHP функции "array_chunk".

function getChunked($coll, $length)
{
    $size = count($coll);
    $result = [];
    $i = 0;
    while ($i < $size) {
        $chunk = [];
        for ($j = 0; $j < $length && $i < $size; $j++) {
            $chunk[] = $coll[$i];
            $i++;
        }
        $result[] = $chunk;
    }

    return $result;
}

$coll = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

print_r(getChunked($coll, 2));