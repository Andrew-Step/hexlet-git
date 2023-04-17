<?php
//Функция, которая заменяет каждое вхождение указанных слов в предложении на последовательность $#%! и возвращает полученную строку.

function makeCensored(string $text, array $stopWords)
{
    $words = explode(' ', $text);
    $result = [];
    foreach ($words as $word) {
        $result[] = in_array($word, $stopWords) ? '$#%!' : $word;
    }

    return implode(' ', $result);
}

$text = 'When you play the game of thrones, you win or you die';
$stopWords = ['you', 'me'];

print_r(makeCensored($text, $stopWords));