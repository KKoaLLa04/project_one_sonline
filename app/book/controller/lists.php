<?php

require_once './book/model/book.php';

$data = [
    'book' => getAllBook()
];
view($data);
