<?php
/*@var $route \Silex\Application*/
/*@var $app \Silex\Application*/ 
$route = require 'Services.php'; 
$app = &$route; // Reference is for code readability

/*
|--------------------------------------------------------------------------
| Routes
|--------------------------------------------------------------------------
|
| Define application routes.
|
*/

// Closure routing.
$route->get('/', function() use ($app)
{
    return $app['views']->render('Sample', array('message' => 'Valar morghulis'));
});

// Controller routing.
$app['controller'] = $app->share(function() use ($app)
{
    return new \App\Controllers\SampleController($app['views']);
});

$route->get('/controller/', "controller:getIndex");

return $app;