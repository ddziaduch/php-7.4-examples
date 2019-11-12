<?php declare(strict_types=1);

curl_version(CURLVERSION_NOW);
// 7.3: brak ostrzeżen
// 7.3: Warning: curl_version(): $version argument ignored
curl_version(0);
