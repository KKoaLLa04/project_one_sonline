<?php

require_once './teacher/model/teacher.php';

$data = [
    'teachers' => getAllTeacher(),
];

view($data);
