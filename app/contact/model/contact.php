<?php

function getAllContact($offset = '', $limit = '3')
{
    $sql = "SELECT * FROM contact";

    if (isset($offset)) {
        $sql .= " LIMIT $offset,$limit";
    }
    $data = getRaw($sql);
    return $data;
}

function getCountContact()
{
    $sql = "SELECT * FROM contact";
    $count = getRows($sql);
    return $count;
}

function getStatusDetail($id)
{
    $sql = "SELECT status FROM contact WHERE id=$id";
    $data = firstRaw($sql);
    return $data;
}

function getContactDetail($id)
{
    $sql = "SELECT * FROM contact WHERE id = $id";
    $data = firstRaw($sql);
    return $data;
}
