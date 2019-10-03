<?php declare(strict_types=1);

function test1() {
    $a = [1, 2];
    $c =& $a;
    list($c, $b) = $a;
    var_dump($a, $b);
}

function test2() {
    $a = [1, 2];
    $_a = "a";
    list($$_a, $b) = $a;
    var_dump($a, $b);
}

// 7.3 -> 1, NULL
// 7.4 -> 1, 2
test1();

// 7.3 -> 1, NULL
// 7.4 -> 1, 2
test2();

