<?php

/*
Функция, которая принимает на вход массив (элементы которого - ассоциативные массивы) и пары ключ-значение (тоже в виде массива),
а возвращает первый элемент исходного массива, значения которого соответствуют переданным парам.
Если совпадений не было, то функция должна вернуть null.
*/

function findWhere($arrayOfAssociativeArrays, $searchArray)
{
    foreach ($arrayOfAssociativeArrays as $associativeArray) {
        if (array_intersect($searchArray, $associativeArray) === $searchArray) {
            return $associativeArray;
        }
    }
    return null;
}

$arrayOfAssociativeArrays = [
    ['title' => 'Book of Fooos', 'author' => 'FooBar', 'year' => 1111],
    ['title' => 'Cymbeline', 'author' => 'Shakespeare', 'year' => 1611],
    ['title' => 'The Tempest', 'author' => 'Shakespeare', 'year' => 1611],
    ['title' => 'Book of Foos Barrrs', 'author' => 'FooBar', 'year' => 2222],
    ['title' => 'Still foooing', 'author' => 'FooBar', 'year' => 3333],
    ['title' => 'Happy Foo', 'author' => 'FooBar', 'year' => 4444],
];

$searchArray = ['author' => 'FooBar', 'year' => 4444];

var_dump(findWhere($arrayOfAssociativeArrays, $searchArray));