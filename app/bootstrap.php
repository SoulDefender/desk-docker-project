<?php

require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();

$app['console'] = function(){
    return new \Symfony\Component\Console\Application();
};

$providers = require_once __DIR__.'providers.php';

foreach ($providers as $serviceProvider) {
    $app->register(new $serviceProvider);
}

return $app;