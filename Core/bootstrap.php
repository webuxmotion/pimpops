<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Core\DI\DI;
use Core\Starter;

try {

  $di = new DI();

  $providers = require __DIR__ . '/Provider/ProviderList.php';

  foreach ($providers as $item) {
    $provider = new $item($di);
    $provider->init();
  }

  $starter = new Starter($di);
  $starter->run();

} catch (\ErrorException $e) {
    echo $e->getMessage();
}
