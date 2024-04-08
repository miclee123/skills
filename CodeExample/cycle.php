<?php

declare(strict_types=1);

$array = [
    [
        [1, 5, 456],
        [3, 7, 36],
    ],
    [
        [6, 15, 6],
        [38, 73, 556],
    ],
    [
        [67, 14, 66],
        [77, 11, 86],
    ],
];

echo "1) перейти к следующей итерации первого цикла\n";

foreach ($array as $i => $item) {
    echo "level 1 $i\n";
    foreach ($item as $j => $item2) {
        echo "\tlevel 2 $j\n";
        foreach ($item2 as $k => $item3) {
            if ($i == 0 && $item3 == 5) {
                continue 3;
            }
            echo "\t\tlevel 3 $k => $item3\n";
        }
    }
}

echo "2) выйти из второго цикла\n";

foreach ($array as $i => $item) {
    echo "level 1 $i\n";
    foreach ($item as $j => $item2) {
        echo "\tlevel 2 $j\n";
        foreach ($item2 as $k => $item3) {
            if ($i == 0 && $item3 == 5) {
                break 2;
            }
            echo "\t\tlevel 3 $k => $item3\n";
        }
    }
}

echo "3) выйти из всех циклов\n";

foreach ($array as $i => $item) {
    echo "level 1 $i\n";
    foreach ($item as $j => $item2) {
        echo "\tlevel 2 $j\n";
        foreach ($item2 as $k => $item3) {
            if ($i == 0 && $item3 == 5) {
                break 3;
            }
            echo "\t\tlevel 3 $k => $item3\n";
        }
    }
}
