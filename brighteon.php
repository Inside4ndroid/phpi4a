<?php

$request = curl_init('http://phpi4a.ddns.net/phpi4a/proxy.php');

curl_setopt($request, CURLOPT_HTTPHEADER, array(
    'Proxy-Auth: Bj5pnZEX6DkcG6Nz6AjDUT1bvcGRVhRaXDuKDX9CjsEs2',
    'Proxy-Target-URL: https://www.brighteon.com/embed/8f39b522-64b8-4085-9763-8a5e1e38816c'
));

curl_exec($request);


