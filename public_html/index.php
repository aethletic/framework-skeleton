<?php

/**
 * Входящая точка приложения.
 * В этом скрипте объявляются роуты.
 */

ini_set('display_errors', true);
date_default_timezone_set('Europe/Samara');

require __DIR__ . '/../app/bootstrap.php';

use Aethletic\Framework\Framework;

// echo '<pre>';
// var_dump();
// echo '</pre>';
// return;

Framework::route()->get('/', 'HomeController@home');

$app->route->run();
