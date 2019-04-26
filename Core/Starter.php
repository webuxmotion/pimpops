<?php

namespace Core;

class Starter {

  private $di;

  public function __construct($di) {
    $this->di = $di;
  }

  public function run() {

    try {

      $db = $this->di->get('db');
      $colors = $db->query('SELECT * FROM color');

      foreach ($colors as $color) {
        echo $color->name . '<br>';
      }

    } catch (\Exception $e) {
        $e->getMessage();
        exit;
    }
  }
}
