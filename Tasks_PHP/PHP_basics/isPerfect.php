<?php
//Функция, которая принимает число и возвращает true, если оно "совершенное", и false — в ином случае

function isPerfect($num)
{
    $result = 1;

    for ($i = 2; $i <= ($num / 2); $i++) {
        if ($num % $i === 0) {
            $result += $i;
        }
    }

    return $result === $num;
}

var_dump(isPerfect(33550336));        //true
