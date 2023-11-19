<?php

require_once './book/model/book.php';

$permissionData = permissionData();

if (!checkPermission($permissionData, 'book', 'Xem')) {
    setFlashData('msg', 'Bạn không có quyền truy cập vào trang này');
    setFlashData('msg_type', 'danger');
    redirect(_WEB_HOST_ROOT_ADMIN);
}

$data = [
    'book' => getAllBook()
];
view($data);
