<?php

function getAllGroups()
{
    $sql = "SELECT * FROM groups ORDER BY id DESC";
    $data = getRaw($sql);
    return $data;
}