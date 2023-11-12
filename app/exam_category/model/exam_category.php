<?php

function getAllExamCate()
{
    $sql = "SELECT * FROM exam_category ORDER BY id DESC";
    $data = getRaw($sql);
    return $data;
}
