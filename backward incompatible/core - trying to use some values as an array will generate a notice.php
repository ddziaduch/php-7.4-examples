<?php declare(strict_types=1);

error_reporting(E_ALL);

$null = null;
$bool = false;
$int = 1;
$float = 1.0;
$resource = fopen(__FILE__, 'r');

// 7.4 rzuci we wszystkich przypadkach
// Notice: Trying to access array offset on value of type null
var_dump($null['test']);
var_dump($bool['test']);
var_dump($int['test']);
var_dump($float['test']);
var_dump($resource['test']);
