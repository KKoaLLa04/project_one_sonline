<?php

require_once "./contact/model/contact.php";

$data = [
    'contact' => getAllContact(),
];

view($data);
