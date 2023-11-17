<?php

function getTestDetail($id)
{
    $sql = "SELECT * FROM test WHERE id=$id";
    $data = firstRaw($sql);
    return $data;
}


function getResultDetail($student_id)
{
    $sql = "SELECT result.*,test.title as test_title, student.fullname as student_name  FROM result INNER JOIN test ON test.id=result.test_id INNER JOIN student ON student.id=result.student_id WHERE student_id=$student_id";
    $data = firstRaw($sql);
    return $data;
}
