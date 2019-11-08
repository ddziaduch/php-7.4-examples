<?php declare(strict_types=1);

// 7.3: brak ostrzeżen
// 7.4: Warning: curl_multi_setopt(): CURLPIPE_HTTP1 is no longer supported
curl_multi_setopt(curl_multi_init(), CURLMOPT_PIPELINING, CURLPIPE_HTTP1);