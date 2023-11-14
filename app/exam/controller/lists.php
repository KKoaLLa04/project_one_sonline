<?php

require_once './exam/model/exam.php';

$data = [
    'exam_control' => getAllExam(),
];
view($data);
