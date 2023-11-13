<?php
//Функция, которая принимает на вход строку и возвращает её копию, у которой каждый n-ный элемент переведен в верхний регистр

function makeItFunny($text, $n)
{
    $i = 0;
    $result = '';

    while ($i < strlen($text)) {
        if (($i + 1) % $n === 0) {
            $result .= strtoupper($text[$i]);
        } else {
            $result .= $text[$i];
        }
        $i++;
    }
    return $result;
}

$text = 'I never look back';
print_r(makeItFunny($text, 2));