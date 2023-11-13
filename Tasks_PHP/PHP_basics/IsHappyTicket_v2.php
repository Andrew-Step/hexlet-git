<?php
//Функция, которая проверяет является ли билет счастливым (номер — всегда строка). Функция должна возвращать "true", если билет счастливый, или "false", если нет

function isHappy($numberOfTicket)
{
    $balance = 0;

    for ($i = 0, $j = strlen($numberOfTicket) - 1; $i < $j; $i += 1, $j -= 1) {
        $balance += $numberOfTicket[$i] - $numberOfTicket[$j];
        print_r("{$balance}\n");
    }

    return $balance === 0;
}

var_dump(isHappy('385916'));        //true
