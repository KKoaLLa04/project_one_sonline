<?php

require_once './subject_category/model/read.php';

$data = [
    'data' => getAllCate(),
    'title' => 'Danh sách danh mục các khóa học'
];

view($data);
