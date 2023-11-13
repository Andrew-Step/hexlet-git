<?php
//Функция, которая возвращает указанную строку треугольника паскаля в виде массива.

function generate($lineNumber)
{
    if ($lineNumber === 0) {
        return [1];
    }

    $prevLine = [1];
    $i = 0;
    while ($i < $lineNumber) {
        $currLine = [1];
        for ($j = 0, $size = count($prevLine); $j < $size - 1; $j++) {
            $currLine[] = $prevLine[$j] + $prevLine[$j + 1];
        }
        $currLine[] = 1;
        $prevLine = $currLine;
        $i++;
    }

    return $currLine;
}

$lineNumber = 10;

print_r(generate($lineNumber));