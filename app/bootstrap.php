<?php

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../../framework/src/autoload.php';

use Aethletic\Framework\Framework;
use Aethletic\Framework\Core\Bootstrap;

Bootstrap::autoload([
    __DIR__ . '/controllers/',
    __DIR__ . '/models/',
    __DIR__ . '/../utils/',
]);

$app = new Framework();

$app->register('route', function() {
    return new \Bramus\Router\Router();
});

$app->register('db', function() {
    $factory = new \Database\Connectors\ConnectionFactory();
    return $factory->make(array(
        'driver'    => 'sqlite',
        'database' => __DIR__ . '/../database/database.sqlite',
    ));
});

$app->register('twig', function() {
    $loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/views');
    return new \Twig\Environment($loader, [
        'cache' => __DIR__ . '/../var/cache/twig',
        'auto_reload' => true,
        'debug' => true,
    ]);
});
