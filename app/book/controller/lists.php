<?php

require_once './book/model/book.php';

$permissionData = permissionData();

if (!checkPermission($permissionData, 'book', 'Xem')) {
    redirect(_WEB_HOST_ROOT_ADMIN);
}
$data = [
    'book' => getAllBook()
];
view($data);
