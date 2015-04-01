<?php 
/*
|--------------------------------------------------------------------------
| Start File
|--------------------------------------------------------------------------
|
| Main bootstrapping file.
|
*/

require __DIR__ . '/../vendor/autoload.php';

$app = require __DIR__ . '/../app/Routes.php';

return $app->run();