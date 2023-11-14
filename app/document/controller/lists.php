<?php

require_once './document/model/document.php';

$data = [
    'document' => getAllDoc(),
];
view($data);
