<?php

require_once './clients/exam_online/model/exam_online.php';

if (!empty($_GET['id'])) {
    $id = $_GET['id'];
} else {
    $id = '1';
}
$data = [
    'exam' => getDetailExam($id),
];

viewClient($data);
