<?php
//Функция, которая находит положительные числа Фибоначчи (аргументом функции является порядковый номер числа)

function fib($number)
{
    if ($number === 0) {
        return 0;
    }
    
    $first = 0;
    $second = 1;
    $result = 1;

    for($i = 1; $i < $number; $i++) {
        $result = $first + $second;
        $first = $second;
        $second = $result;
    }

    return $result;
}

print_r(fib(0));
print_r(fib(1));
print_r(fib(2));
print_r(fib(3));
print_r(fib(4));
print_r(fib(5));
print_r(fib(6));