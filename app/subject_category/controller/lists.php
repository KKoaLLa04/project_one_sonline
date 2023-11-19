<?php

require_once './subject_category/model/read.php';

$permissionData = permissionData();

if (!checkPermission($permissionData, 'subject_category', 'Xem')) {
    setFlashData('msg', 'Bạn không có quyền truy cập vào trang này');
    setFlashData('msg_type', 'danger');
    redirect(_WEB_HOST_ROOT_ADMIN);
}


$data = [
    'data' => getAllCate(),
    'title' => 'Danh sách danh mục các khóa học'
];

view($data);
