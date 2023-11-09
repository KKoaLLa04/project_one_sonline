<?php

function getAllStudent()
{
    $sql = "SELECT * FROM student";
    $data = getRaw($sql);
    return $data;
}

function checkEmailExist($email)
{
    $sql = "SELECT * FROM student WHERE email='$email'";
    $data = getRows($sql);
    return $data;
}