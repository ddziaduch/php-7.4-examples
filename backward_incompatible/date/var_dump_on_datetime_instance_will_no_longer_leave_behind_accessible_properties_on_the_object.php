<?php declare(strict_types=1);

error_reporting(E_ALL);

$d1 = DateTime::createFromFormat("Ymd\THis\Z", '20170920T091600Z');
// 7.3: Notice: Undefined property: DateTime::$date
// 7.4: Notice: Undefined property: DateTime::$date
echo $d1->date, "\n";

$d2 = DateTime::createFromFormat("Ymd\THis\Z", '20170920T091600Z');
// 7.3: 2017-09-20 09:16:00.000000
// 7.4: Notice: Undefined property: DateTime::$date
print_r($d2);
echo $d2->date, "\n";

