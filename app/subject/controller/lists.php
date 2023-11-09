<?php
require_once  "./subject/model/course.php";

$data = [
    "data" => getAllCourse()
];


view($data);
