<?php

$request = curl_init('http://phpi4a.ddns.net/phpi4a/proxy.php');

curl_setopt($request, CURLOPT_HTTPHEADER, array(
    'Proxy-Auth: Bj5pnZEX6DkcG6Nz6AjDUT1bvcGRVhRaXDuKDX9CjsEs2',
    'Proxy-Target-URL: https://www.github.com',
    'Proxy-Debug: 1'
));

curl_exec($request);
