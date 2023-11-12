<?php

function getAllExam()
{
    $sql = "SELECT exam.*, exam_category.name FROM exam INNER JOIN exam_category ON exam_category.id=exam.id ORDER BY exam_id DESC";
    $data = getRaw($sql);
    return $data;
}
