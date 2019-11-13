<?php declare(strict_types=1);

error_reporting(E_ALL);

$d1 = DateTime::createFromFormat("Ymd\THis\Z", '20170920T091600Z');
echo $d1->date, "\n";

$d2 = DateTime::createFromFormat("Ymd\THis\Z", '20170920T091600Z');
print_r($d2);
echo $d2->date, "\n";

