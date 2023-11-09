<?php

require_once "./book_category/model/book_category.php";

$data = [
    'book_category' => getAllBookCate(),
];

view($data);
