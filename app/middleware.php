<?php

$checkProxyHeaders = false;
$trustedProxies    = [];

$app->add(new RKA\Middleware\IpAddress($checkProxyHeaders, $trustedProxies));
$app->add(new RKA\Middleware\SchemeAndHost($trustedProxies));
$app->add(new RKA\SessionMiddleware($container['settings']['session']));


