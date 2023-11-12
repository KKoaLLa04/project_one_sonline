<?php

function getAllBookCate()
{
    $sql = "SELECT * FROM book_category ORDER BY id DESC";
    $data = getRaw($sql);
    return $data;
}
function getAllBook()
{
    $sql = "SELECT book.*, book_category.title as title_cate FROM book INNER JOIN book_category ON book_category.id=book.book_id";
    $data = getRaw($sql);
    return $data;
}

function getCateBookDetail($id)
{
    $sql = "SELECT book.*, book_category.title as title_cate FROM book INNER JOIN book_category ON book_category.id=book.book_id WHERE book_id=$id";
    $data = getRaw($sql);
    return $data;
}
