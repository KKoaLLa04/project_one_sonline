<?php

function getAllDocCate()
{
    $sql = "SELECT * FROM document_category";
    $data = getRaw($sql);
    return $data;
}

function getDocCateDetail($id)
{
    $sql = "SELECT * FROM document_category WHERE id=$id";
    $data = firstRaw($sql);
    return $data;
}
