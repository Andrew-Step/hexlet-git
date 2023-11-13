<?php
//Функция, которая проверяет балансировку круглых скобок в арифметических выражениях

function checkIfBalanced($expression)
{
    $count = 0;
    for ($i = 0, $len = strlen($expression); $i < $len; $i++) {
        if ($expression[$i] === '(') {
            $count++;
        } elseif ($expression[$i] === ')') {
            $count--;
        } else {
            continue;
        }

        if ($count < 0) {
            return false;
        }
    }

    return $count === 0;
}

$expression = '((5 + 6) * (7 + 8))/(4 + 3))';

var_dump(checkIfBalanced($expression));