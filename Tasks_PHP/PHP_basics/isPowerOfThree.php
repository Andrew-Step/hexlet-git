<?php
//Функция, которая определяет, является ли переданное число натуральной степенью тройки

function isPowerOfThree($num) {
    return $num > 1 ? isPowerOfThree($num / 3) : $num === 1;
}
var_dump(isPowerOfThree(14348907));				//TRUE