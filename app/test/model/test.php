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

function getAllTest()
{
    $sql = "SELECT * FROM test ORDER BY id DESC";
    $data = getRaw($sql);
    return $data;
}

function getDetail($id)
{
    $sql = "SELECT * FROM test WHERE id=$id";
    $data = firstRaw($sql);
    return $data;
}
