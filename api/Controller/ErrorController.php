<?php

namespace Api\Controller;

class ErrorController {
  
  public function status404() {

    $res =  [
      "status" => "404",
      "body" => "Resource not found."
    ];

    echo json_encode($res);
  }
}
