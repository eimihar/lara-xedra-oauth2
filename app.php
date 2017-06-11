<?php
require_once __DIR__ . '/vendor/autoload.php';

\Exedra\Support\Autoloader::getInstance()->autoloadPsr4('Laraxedro', __DIR__.'/app/src');

$app = new Exedra\Application(__DIR__);



return $app;