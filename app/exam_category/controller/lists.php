<?php

require_once './exam_category/model/exam_category.php';

$data = [
    'exam_cate' => getAllExamCate(),
];

view($data);
