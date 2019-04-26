<?php

namespace Api\Controller;

use Core\Controller;

class ColorController extends Controller {
  
  public function list() {

    $colors = $this->db->query('SELECT * FROM color');

    $res =  [
      "status" => "200",
      "body" => $colors 
    ];

    echo json_encode($res);
  }

  public function item($id) {

    $color = $this->db->query("SELECT * FROM color WHERE id='$id'");

    $res =  [
      "status" => "200",
      "body" => $color 
    ];

    echo json_encode($res);
  }

  public function add() {

    $color = $_POST;
    $color['name'];
    $values = [$color['name']];

    $sql = "
      INSERT INTO color (name) VALUES (?) 
    ";

    $this->db->execute($sql, $values);
    $colorId = $this->db->lastInsertId();

    $res =  [
      "status" => "200",
      "body" => $colorId
    ];

    echo json_encode($res);
  }
}
