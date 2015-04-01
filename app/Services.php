<?php

$app = new \Silex\Application();

/*
|--------------------------------------------------------------------------
| General Configuration
|--------------------------------------------------------------------------
*/
$genConfig = require __DIR__ . '/../config/App.php';

$app['debug'] = $genConfig['debug'];

/*
|--------------------------------------------------------------------------
| Service Provider Registration
|--------------------------------------------------------------------------
*/

$app->register(new \Silex\Provider\ServiceControllerServiceProvider);

$app->register(new \CesarV\Silex\ServiceProviders\Views(), array(
    'views.dir' => __DIR__ . '/../views/',
));

return $app;