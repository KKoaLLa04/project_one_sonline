<?php

function getAllNewsCate()
{
    $sql = "SELECT * FROM news_category";
    $data = getRaw($sql);
    return $data;
}
