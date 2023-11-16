<?php

//Функция, которая принимает на вход цепь ДНК и возвращает соответствующую цепь РНК (совершает транскрипцию РНК).

function toRna($strDna)
{
    $replacementRule = ['G' => 'C', 'C' => 'G', 'T' => 'A', 'A' => 'U'];
    $Rna = strtr($strDna, $replacementRule);

    return $Rna;
}

$strDna = 'ACGTGGTCTTAA';

print_r(toRna($strDna));    //UGCACCAGAAUU