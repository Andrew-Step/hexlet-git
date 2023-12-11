<?php

//Функция, которая проверяет переданное число на простоту и печатает на экран 'yes' или 'no'.

function isPrime($num)
{
    if ($num < 2) {
        return false;
    }
    for ($i = 2; $i <= ($num / 2); $i++) {
        if ($num % $i === 0) {
            return false;
        }
    }
    return true;
}

function sayPrimeOrNot($num)
{
    $text = isPrime($num) ? 'yes' : 'no';
    print_r($text);
}

sayPrimeOrNot(2017);    //'yes'