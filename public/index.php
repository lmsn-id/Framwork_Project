<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Config\Env;

Env::load();

$router = require_once __DIR__ . '/../routes/web.php';

$router->dispatch();
