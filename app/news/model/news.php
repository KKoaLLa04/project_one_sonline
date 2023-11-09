<?php

function getAllNews()
{
    $sql = "SELECT * FROM news";
    $data = getRaw($sql);
    return $data;
}
