<?php

require_once 'test/model/test.php';

$data = [
    'test_category' => getAllCateTest(),
];
view($data);
