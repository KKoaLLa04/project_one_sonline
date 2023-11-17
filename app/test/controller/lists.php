<?php

require_once './test/model/test.php';

$data = [
    'test' => getAllTest(),
];
view($data);
