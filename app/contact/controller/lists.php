<?php

require_once "./contact/model/contact.php";

$page = 1;

if (!empty($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 1;
}

// thuat toan phan trang
// 1. số bản ghi / 1 trang
$perPage = 10;

// 2. Lấy số bản ghi trong database
$count = getCountContact();

// 3. Tính số trang max
$maxPage = ceil($count / $perPage);

// 4. Tính offset

// 20 ban ghi => 0 > 3 => ($page-1)*$perPage = (1-1)*3 = 0 => 0 , 3
// 20 ban ghi => 3 > 6 => (2-1)*3 = 3 => 3,3
// 20 ban ghi => 6 > 9 => (3-1)*3 => 6,3
// 20 ban ghi => 9 > 12 => (4-1)*3 => 9,3
// 20 ban ghi => 12 > 15 => (5-1) => 12,3

$offset = ($page - 1) * $perPage;

$data = [
    'contact' => getAllContact($offset, $perPage),
    'maxPage' => $maxPage,
    'page' => $page,
];

view($data);
