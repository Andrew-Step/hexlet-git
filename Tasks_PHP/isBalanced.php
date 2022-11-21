<?php
//Функция, которая принимает на вход строку, состоящую только из открывающих и закрывающих круглых скобок, и проверяет, является ли эта строка корректной (у каждой открывающей скобки должна быть соответствующая ей закрывающая скобка). Пустая строка (отсутствие скобок) считается корректной.

function isBalanced($str)
{
    $len = strlen($str);
    $result = 0;

    for ($i = 0; $i < $len; $i++) {
        if ($str[$i] === '(' && $result >= 0) {
            $result++;
        } elseif ($str[$i] === ')' && $result >= 0) {
            $result--;
        } else return false;
    }

    return $result === 0;
}

var_dump(isBalanced(''));           //true
var_dump(isBalanced('(())'));       //true
var_dump(isBalanced('((())'));      //false
var_dump(isBalanced('())(()'));     //false
