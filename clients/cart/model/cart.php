<?php

function getAllCart($student_id)
{
    $sql = "SELECT * FROM cart WHERE student_id=$student_id AND status = 0";
    $data = getRaw($sql);
    return $data;
}

function getCartDetail($id)
{
    $sql = "SELECT * FROM cart WHERE id=$id";
    $data = firstRaw($sql);
    return $data;
}

function getBillDetail($code)
{
    $sql = "SELECT * FROM bill WHERE code='$code'";
    $data = firstRaw($sql);
    return $data;
}

function getCartBill($code)
{
    $sql = "SELECT * FROM cart WHERE code_id='$code'";
    $data = getRaw($sql);
    return $data;
}
