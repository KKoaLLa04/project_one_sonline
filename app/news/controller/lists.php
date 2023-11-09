<?php

require_once './news/model/news.php';

$data = [
    'news' => getAllNews(),
];

view($data);
