<?php

require_once './document/model/document.php';

$data = [
    'category' => getAllDocCate(),
];
view($data);
