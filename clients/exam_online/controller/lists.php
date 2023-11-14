<?php

require_once './clients/exam_online/model/exam_online.php';

$data = [
    'exam_category' => getAllCate(),
    'exam' => getAllExam(),
];

viewClient($data);
