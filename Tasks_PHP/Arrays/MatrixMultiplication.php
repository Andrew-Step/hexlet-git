<?php

//Функция, которая принимает две матрицы и возвращает новую матрицу — результат их произведения.
//Операция умножения двух матриц А и В представляет собой вычисление результирующей матрицы С, где каждый элемент C(ij)
//равен сумме произведений элементов в соответствующей строке первой матрицы A(ik) и элементов в столбце второй матрицы B(kj).

function multiply($matrixA, $matrixB)
{
    [$row] = $matrixA;
    [$column] = $matrixB;
    $sizeRow = count($row);
    $columnCount = count($column);
    $matrixC = [];
    for ($i = 0; $i < count($matrixA); $i++) {
        $newRow = [];
        for ($j = 0; $j < $columnCount; $j++) {
            $element = 0;
            for ($k = 0; $k < $sizeRow; $k++) {
                $element += $matrixA[$i][$k] * $matrixB[$k][$j];
            }
            $newRow[] = $element;
        }
        $matrixC[] = $newRow;
    }

    return $matrixC;
}

$matrixA = [
  [1, 2],
  [3, 2],
];

$matrixB = [
  [3, 2],
  [1, 1],
];

print_r(multiply($matrixA, $matrixB));