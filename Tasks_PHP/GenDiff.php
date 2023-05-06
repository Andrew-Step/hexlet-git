<?php
//Функция, которая сравнивает два ассоциативных массива и возвращает результат сравнения в виде ассоциативного массива.
//Ключами результирующего массива будут все ключи из двух входящих массивов, а значением строка с описанием отличий => 'added', 'deleted', 'changed' или 'unchanged'.

function genDiff($data1, $data2)
{
    $keys = array_merge(array_keys($data1), array_keys($data2));
    $result = [];
    foreach ($keys as $key) {
        if (!array_key_exists($key, $data1)) {
            $result[$key] = 'added';
        } elseif (!array_key_exists($key, $data2)) {
            $result[$key] = 'deleted';
        } elseif ($data1[$key] !== $data2[$key]) {
            $result[$key] = 'changed';
        } else {
            $result[$key] = 'unchanged';
        }
    }
    return $result;
}

$array1 = ['one' => 'eon', 'two' => 'two', 'four' => true];
$array2 = ['two' => 'own', 'zero' => 4, 'four' => true];

print_r(genDiff($array1, $array2));