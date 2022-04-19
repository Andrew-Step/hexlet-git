<?php
//Функция, которая возвращает сумму двух бинарных чисел в виде строки

function binarySum(string $binaryOne, string $binaryTwo) {
    $decSum = bindec($binaryOne) + bindec($binaryTwo); 		//int
    return decbin($decSum); 					            //string
}
print_r(binarySum('1101', '101')); 				            //10010