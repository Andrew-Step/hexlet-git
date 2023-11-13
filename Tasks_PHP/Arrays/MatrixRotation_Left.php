<?php

//Функция, которая поворачивает матрицу влево (против часовой стрелки).

function rotateLeft($matrix)
{
    $sizeRow = count($matrix[0]);
    $newMatrix = [];
    for ($i = 1; $i <= $sizeRow; $i++) {
        $newRow = [];
        foreach ($matrix as $row) {
            $newRow[] = $row[count($row) - $i];
        }
        $newMatrix[] = $newRow;
    }

    return $newMatrix;
}

$matrix = [
  [1, 2, 3],
  [5, 6, 7],
  [9, 0, 1],
  [3, 4, 5],
];

print_r(rotateLeft($matrix));