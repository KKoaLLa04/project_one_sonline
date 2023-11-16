<?php

function getAllCateTest()
{
    $sql = "SELECT * FROM test_category ORDER BY id DESC";
    $data = getRaw($sql);
    return $data;
}

function getTestDetail($id)
{
    $sql = "SELECT * FROM test_category WHERE id=$id";
    $data = firstRaw($sql);
    return $data;
}
