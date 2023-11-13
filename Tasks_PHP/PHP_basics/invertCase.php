<?php
//Функция, которая инвертирует регистр каждого символа в переданной строке

function invertCase($text)
{
    $result = '';
    $length = mb_strlen($text);

    for ($i = 0; $i < $length; $i++) {
        $currentChar = mb_substr($text, $i, 1);
        if ($currentChar === mb_strtoupper($currentChar)) {
            $result .= mb_strtolower($currentChar);
        } else {
            $result .= mb_strtoupper($currentChar);
        }
    }

    return $result;
}

$text = 'ПрИвЕт!';
print_r(invertCase($text));