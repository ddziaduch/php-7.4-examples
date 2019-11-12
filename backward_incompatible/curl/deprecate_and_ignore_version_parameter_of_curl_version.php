<?php declare(strict_types=1);

error_reporting(E_ALL);

// 7.3: brak ostrzeżen
// 7.4: Deprecated: curl_version(): the $version parameter is deprecated
curl_version(CURLVERSION_NOW);
// 7.3: brak ostrzeżen
// 7.3: Warning: curl_version(): $version argument ignored
curl_version(0);
