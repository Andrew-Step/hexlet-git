<?php

//Функция, которая принимает на вход строку и возвращает длину максимальной последовательности из неповторяющихся символов.

function getLongestLength($string)
{
    $array = str_split($string);
    $size = count($array);
    $buffer = [];
    $result = [];

    for ($y = 0; $y < $size; $y++) {
        for ($i = $y; $i < $size; $i++) {
            if (!in_array($array[$i], $buffer)) {
                $buffer[] = $array[$i];
            } else {
                $result[] = implode($buffer);
                $buffer = [];
                break;
            }
        }
        if (!empty($buffer)) {
            $result[] = implode($buffer);
            break;
        }
    }

    $length = 0;
    for ($j = 0; $j < count($result); $j++) {
        $count = strlen($result[$j]);
        if ($count > $length) {
            $length = $count;
        }
    }

    return $length;
}

print_r(getLongestLength('GetLongestLength'));