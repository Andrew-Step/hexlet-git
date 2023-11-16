<?php

function buildQueryString($parameters)
{
    ksort($parameters);
    $arr = [];
    foreach ($parameters as $key => $value) {
        $arr[] = "{$key}={$value}";
    }
    return (implode("&", $arr));
}

$parameters = ['a' => 10, 's' => 'Wow', 'd' => 3.2, 'z' => '89'];

print_r(buildQueryString($parameters));