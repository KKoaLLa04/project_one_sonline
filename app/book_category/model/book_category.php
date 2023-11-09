<?php

function getAllBookCate()
{
    $sql = "SELECT * FROM book_category";
    $data = getRaw($sql);
    return $data;
}

function getBookCateDetail($id)
{
    $sql = "SELECT * FROM book_category WHERE id=$id";
    $data =  firstRaw($sql);
    return $data;
}
