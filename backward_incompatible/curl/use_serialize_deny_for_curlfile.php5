<?php declare(strict_types=1);

$file = new CURLFile(__DIR__ . '/../../README.md');
// 7.3: brak wyjątku
// 7.4: Fatal error: Uncaught Exception: Serialization of 'CURLFile' is not allowed
var_dump(serialize($file));

