<?php
//Функция, которая проверяет является ли билет счастливым (номер — всегда строка). Функция должна возвращать "true", если билет счастливый, или "false", если нет

function isHappy($numberOfTicket)
{
    $len = strlen($numberOfTicket);
    $result = 0;

    if ($len % 2 !== 0) {
        return false;
    }

    for ($i = 0; $i < ($len / 2); $i++) {
        $result += $numberOfTicket[$i] - $numberOfTicket[$len - ($i + 1)];
        //print_r("{$result}\n");
    }

    return $result === 0;
}

var_dump(isHappy('385916'));        //true
