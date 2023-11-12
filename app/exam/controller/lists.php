<?php

require_once './exam/model/exam.php';

$data = [
    'exam' => getAllExam(),
];
view($data);
