<?php

require_once "./book_category/model/book_category.php";

$permissionData = permissionData();

if (!checkPermission($permissionData, 'book_category', 'Xem')) {
    setFlashData('msg', 'Bạn không có quyền truy cập vào trang này');
    setFlashData('msg_type', 'danger');
    redirect(_WEB_HOST_ROOT_ADMIN);
}

$data = [
    'book_category' => getAllBookCate(),
];

view($data);