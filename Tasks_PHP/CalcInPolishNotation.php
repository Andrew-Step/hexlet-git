<?php
//Функция, которая принимает массив, каждый элемент которого содержит число или знак операции (+, -, *, /).
//Функция должна вернуть результат вычисления по обратной польской записи.
//Если в какой-то момент происходит деление на ноль, функция должна вернуть значение "null".

function calcInPolishNotation($array)
{
    $stack = [];
    $operators = ['*', '/', '+', '-'];
    foreach ($array as $value) {
        if (!in_array($value, $operators)) {
            array_push($stack, $value);
            continue;
        }

        $b = array_pop($stack);
        $a = array_pop($stack);
        switch ($value) {
            case '*':
                $result = $a * $b;
                break;
            case '/':
                $result = $b === 0 ? null : $a / $b;
                break;
            case '+':
                $result = $a + $b;
                break;
            case '-':
                $result = $a - $b;
                break;
        }

        if ($result === null) {
            return $result;
        }

        array_push($stack, $result);
    }

    return array_pop($stack);
}

$array = [1, 2, '+', 4, '*', 0, '/'];

var_dump(calcInPolishNotation($array));