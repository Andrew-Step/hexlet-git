<?php
//Функция, которая находит место ближайшее к указанной точке на карте и возвращает его.

function getDistance(array $point1, array $point2)
{
    [$x1, $y1] = $point1;
    [$x2, $y2] = $point2;

    $xs = $x2 - $x1;
    $ys = $y2 - $y1;

    return sqrt($xs ** 2 + $ys ** 2);
}

function getTheNearestLocation($locations, $point)
{
    if (empty($locations)) {
        return null;
    }

    $result = 0;
    foreach ($locations as $location) {
        [, $pointLocation] = $location;
        $distance = getDistance($pointLocation, $point);
        if ($distance < $result) {
            $nearestLocation = $location;
        }
        $result = $distance;
    }

    return $nearestLocation;
}

$locations = [
    ['Park', [10, 5]],
    ['Sea', [1, 3]],
    ['Museum', [8, 4]],
];

$point = [5, 5];

var_dump(getTheNearestLocation($locations, $point)); // ['Museum', [8, 4]]