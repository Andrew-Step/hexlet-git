<?php

//Функция, которая принимает на вход массив, состоящий из массивов-пар, и возвращает ассоциативный массив, полученный из этих пар.

function fromPairs($arrayOfPairs)
{
    $result = [];
    foreach ($arrayOfPairs as [$key, $value]) {
        $result[$key] = $value;
    }

    return $result;
}

$arrayOfPairs = [['cat', 5], ['dog', 6], ['cat', 11]];

print_r(fromPairs($arrayOfPairs));