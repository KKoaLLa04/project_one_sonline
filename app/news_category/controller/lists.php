<?php

require_once './news_category/model/news.php';

$data = [
    'news_category' => getAllNewsCate(),
];
view($data);
