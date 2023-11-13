<?php

//Функция, которая поворачивает матрицу вправо (по часовой стрелке).

function rotateRight($matrix)
{
    $sizeRow = count($matrix[0]);
    $newMatrix = [];
    for ($i = 0; $i < $sizeRow; $i++) {
        $newRow = [];
        foreach ($matrix as $row) {
            $newRow[] = $row[$i];
        }
        $newMatrix[] = array_reverse($newRow);
    }

    return $newMatrix;
}

$matrix = [
  [1, 2, 3, 4],
  [5, 6, 7, 8],
  [9, 0, 1, 2],
];

print_r(rotateRight($matrix));