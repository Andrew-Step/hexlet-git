<?php

//Функция, которая принимает на вход два параметра: набор символов (строку) и слово; и проверяет, можно ли из переданного набора составить это слово. В результате вызова функция возвращает true или false.

function scrabble($string, $word)
{
    $where = str_split(strtolower($string));
    $what = str_split(strtolower($word));

    $resultArray = [];
    foreach ($what as $char) {
        if (in_array($char, $where)) {
            $resultArray[] = $char;
            unset($where[array_search($char, $where)]);
        }
    }

    return (count($resultArray) === count($what));
}

$string = 'scriptingjava';
$word = 'JavaScript';

var_dump(scrabble($string, $word));
