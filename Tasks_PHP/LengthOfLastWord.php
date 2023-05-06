<?php
//Функция, которая возвращает длину последнего слова переданной на вход строки. Словом считается любая последовательность, не содержащая пробелов.

function lengthOfLastWord($text)
{
    $editedText = trim($text);
    $words = explode(' ', $editedText);
    $size = count($words);
    $lastWord = $words[$size - 1];
    return strlen($lastWord);
}

$text = 'A word is any sequence that does not contain spaces.';

print_r(lengthOfLastWord($text));