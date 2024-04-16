<?php

use Kish\Kernel;

require 'vendor/autoload.php';


$app = new Kernel();

\Kish\Common\Debug::dump($app, ['a', 'b', 'c']);
