<?php

function getAllCourse()
{
    $sql = "SELECT course.*, fullname, course_category.title as cate_name FROM course INNER JOIN teacher ON teacher.id=course.teacher_id INNER JOIN course_category ON course_category.id=course.cate_id ORDER BY course.cate_id DESC";
    $data = getRaw($sql);
    return $data;
}

function getAllTeacher()
{
    $sql = "SELECT * FROM teacher";
    $data = getRaw($sql);
    return $data;
}

function getAllCate()
{
    $sql = "SELECT * FROM course_category";
    $data = getRaw($sql);
    return $data;
}

function getCourseDetail($id)
{
    $sql = "SELECT * FROM course WHERE id = $id";
    $data = firstRaw($sql);
    return $data;
}
