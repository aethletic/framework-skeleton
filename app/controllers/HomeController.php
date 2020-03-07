<?php

use Aethletic\Framework\Framework;

class HomeController
{
    public static function home()
    {
        // echo Framework::app()->twig->render('home/home.html', ['user' => 'Ivan']);
        // echo Framework::$app->twig->render('home/home.html', ['user' => 'Ivan']);
        echo Framework::twig()->render('home/home.html', ['user' => 'Ivan']);
    }
}
