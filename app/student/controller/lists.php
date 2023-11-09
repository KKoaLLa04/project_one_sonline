<?php

require_once './student/model/student.php';

$data = [
    'student' => getAllStudent(),
];
view($data);