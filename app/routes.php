
<?php

// Route without filecaching
$app->get('/', function ($request, $response, $args) {
    $response->write('This route is not cached: ');
    $dt = new \DateTime('NOW');
    $dt = $dt->format('c');
    $response->write($dt);
    return $response;
});

// Route with filecaching
$app->get('/cached', function ($request, $response, $args) {
    $response->write('This route is cached: ');
    $dt = new \DateTime('NOW');
    $dt = $dt->format('c');
    $response->write($dt);
    return $response;
})->add('\App\Middleware\SlimPageCaching:run');

$app->get('/test', function ($request, $response, $args) {


    return $response;
});
