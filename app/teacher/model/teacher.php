<?php

function getAllTeacher()
{
    $sql = "SELECT * FROM teacher ORDER BY id desc";
    $data = getRaw($sql);
    return $data;
}

function checkEmailExist($email)
{
    $sql = "SELECT * FROM teacher WHERE email='$email'";
    $data = firstRaw($sql);
    echo $sql;
    return $data;
}

function teacherDetail($id)
{
    $sql = "SELECT * FROM teacher WHERE id = $id";
    $data = firstRaw($sql);
    return $data;
}

function checkEmailUpdate($email, $id)
{
    $sql = "SELECT * FROM teacher WHERE email='$email' ANd id <> $id";
    $data = firstRaw($sql);
    echo $sql;
    return $data;
}
