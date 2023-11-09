<?php

function getAllContact()
{
    $sql = "SELECT * FROM contact";
    $data = getRaw($sql);
    return $data;
}
