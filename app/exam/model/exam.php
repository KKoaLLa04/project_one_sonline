<?php

function getAllExam()
{
    $sql = "SELECT exam.*, exam_category.name FROM exam INNER JOIN exam_category ON exam_category.id=exam.exam_id ORDER BY exam_id DESC";
    $data = getRaw($sql);
    return $data;
}

function getAllCate()
{
    $sql = "SELECT * FROM exam_category ORDER BY id DESC";
    $data = getRaw($sql);
    return $data;
}

function getExamDetail($id)
{
    $sql = "SELECT * FROM exam WHERE id = $id";
    $data = firstRaw($sql);
    return $data;
}
