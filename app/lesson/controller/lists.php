<?php

require_once './lesson/model/lesson.php';

$data = [
    'lesson' => getAllLesson(),
];
view($data);