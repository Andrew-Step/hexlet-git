<?php
//Функция, которая проверяет, содержит ли строка букву в указанном регистре

function hasChar($text, $char)
{
    $index = 0;

    while ($index < strlen($text)) {
        if ($text[$index] === $char) {
            return true;
        }
        $index++;
    }
    return false;
}

$text = 'I never Look back';
var_dump(hasChar($text, 'L'));