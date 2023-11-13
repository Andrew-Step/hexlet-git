<?php

//Функция, которая принимает на вход матрицу и возвращает список элементов матрицы по порядку следования от левого верхнего элемента по часовой стрелке к внутреннему (движение по матрице напоминает улитку).

function rotateLeft($matrix)
{
    $sizeRow = count($matrix[0]);
    $rotateMatrix = [];
    for ($i = 1; $i <= $sizeRow; $i++) {
        $newRow = [];
        foreach ($matrix as $row) {
            $newRow[] = $row[count($row) - $i];
        }
        $rotateMatrix[] = $newRow;
    }

    return $rotateMatrix;
}

function buildSnailPath($matrix)
{
    $result = [];
    while (count($matrix) > 1) {
        $result = [...$result, ...$matrix[0]];
        unset($matrix[0]);
        $matrix = rotateLeft(array_values($matrix));
    }

    return $result = [...$result, ...$matrix[0]];
}

$matrix = [
  [1, 2, 3],
  [4, 5, 6],
  [7, 8, 9]
];

print_r(buildSnailPath($matrix));