<?php
// application.php

require __DIR__.'/vendor/autoload.php';

use Symfony\Component\Console\Application;

$app = new Application();

// ... register commands
$app->add(new App\SayHello());
$app->add(new App\RepeatString());

$app->add(new App\Guest());
$app->run();
