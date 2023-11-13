<?php
//Функция, которая принимает на вход неотрицательное целое число и возвращает другое число, полученное из первого следующим преобразованием: итеративно сложите все входящие в него цифры до тех пор пока не останется одна цифра

function sumOfDigits($num)
{
    $str = (string) $num;
    $len = strlen($str);
    $result = 0;

    for ($i = 0; $i < $len; $i++) {
        $result += $str[$i];
    }

    return $result;
}

function addDigits($num)
{
    while ($num >= 10) {
        $num = sumOfDigits($num);
    }
    return $num;
}

print_r(addDigits(999));