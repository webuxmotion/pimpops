<?php

namespace Core\Provider\Database;

use Core\Provider\AbstractProvider;
use Core\Worker\Database\Connection;

class Provider extends AbstractProvider {

  public $workerName = 'db';

  public function init() {
    $db = new Connection();
    $this->di->set($this->workerName, $db);
  }
}
