<?php

require __DIR__.'/../vendor/autoload.php';



$settings = require_once __DIR__.'/../src/settings.php';

$app = new \Slim\App($settings);
require_once __DIR__.'/../src/dependencies.php';
require_once __DIR__.'/../src/router.php';

$app->run();