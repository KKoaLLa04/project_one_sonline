<?php

function getAllLesson()
{
    $sql = "SELECT lesson.*, module.title as module_name, course.title as course_name FROM lesson INNER JOIN module ON module.id=lesson.module_id INNER JOIN course ON course.id=module.course_id ORDER BY course.title DESC";
    $data = getRaw($sql);
    return $data;
}

function getAllModule()
{
    $sql = "SELECT * FROM module ORDER BY id DESC";
    $data = getRaw($sql);
    return $data;
}


function getLessonDetail($id)
{
    $sql = "SELECT * FROM lesson WHERE id = $id";
    $data = firstRaw($sql);
    return $data;
}
