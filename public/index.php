<?php

use Kish\Kernel;

require 'vendor/autoload.php';

$request = new \Kish\Http\Message\Request\Request();
$app = new Kernel();

\Kish\Common\Debug::dump($app->handle($request));
