<?php
//Функция, которая находит положительные числа Фибоначчи (аргументом функции является порядковый номер числа)

function fib($n, $a = 0, $b = 1)
{
    return $n > 1 ? fib($n - 1, $b, $a + $b) : $b;
}
print_r(fib(22));	//17711