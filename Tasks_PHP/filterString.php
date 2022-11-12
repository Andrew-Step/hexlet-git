<?php
//Функция, которая принимает на вход строку и символ, и возвращает новую строку, в которой удален переданный символ во всех его позициях

function filterString($str, $symbol)
{
    $index = 0;
    $result = '';

    while ($index < strlen($str)) {
        if ($str[$index] === $symbol) {
            $index += 1;
        } else {
            $result .= $str[$index];
            $index += 1;
        }
    }

    return $result;
}

$str = 'LOOOK';

print_r(filterString($str, 'O'));
