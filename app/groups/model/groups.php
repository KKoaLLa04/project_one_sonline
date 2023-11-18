<?php

function getAllGroups()
{
    $sql = "SELECT * FROM groups ORDER BY id DESC";
    $data = getRaw($sql);
    return $data;
}

function getGroupDetail($id)
{
    $sql = "SELECT * FROM groups WHERE id = $id";
    $data = firstRaw($sql);
    return $data;
}

function getAllBlocks()
{
    $sql = "SELECT * FROM blocks";
    $data = getRaw($sql);
    return $data;
}
