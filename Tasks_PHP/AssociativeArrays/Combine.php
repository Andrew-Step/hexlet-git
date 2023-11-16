<?php

//Функция, которая объединяет несколько словарей (ассоциативных массивов) в один общий словарь. Функция принимает на вход массив массивов и возвращает результат в виде ассоциативного массива, в котором каждый ключ содержит список уникальных значений в виде массива.

function combine($dictionaries)
{
    $generalDictionary = [];
    foreach ($dictionaries as $dictionary) {
        foreach ($dictionary as $key => $value) {
            $generalDictionary[$key][] = $value;
            $generalDictionary[$key] = array_unique($generalDictionary[$key]);
        }
    }

    return $generalDictionary;
}

$dictionaries = [
  ['a' => 1, 'b' => 2, 'c' => 3],
  [],
  ['a' => 3, 'b' => 2, 'd' => 5],
  ['a' => 6],
  ['b' => 4, 'c' => 3, 'd' => 2],
  ['e' => 9],
];

print_r(combine($dictionaries));