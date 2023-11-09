<?php

function getAllCate()
{
    $sql = "SELECT * FROM course_category";
    $data = getRaw($sql);
    return $data;
}

function getDetailCate($id)
{
    $sql = "SELECT * FROM course_category WHERE id=$id";
    $data = firstRaw($sql);
    return $data;
}
