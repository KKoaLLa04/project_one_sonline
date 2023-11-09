<?php

require_once './module/model/module.php';

$data = [
    'module' => getAllModule()
];

view($data);
