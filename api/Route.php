<?php

$this->router->add('colors', '/api/colors/', 'ColorController:list');
$this->router->add('color-one', '/api/colors/(id:int)', 'ColorController:item');
$this->router->add('color-add', '/api/color/add/', 'ColorController:add', 'POST');
