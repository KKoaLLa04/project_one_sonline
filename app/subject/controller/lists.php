<?php
require_once  "./subject/model/course.php";

$permissionData = permissionData();

if (!checkPermission($permissionData, 'subject', 'Xem')) {
    setFlashData('msg', 'Bạn không có quyền truy cập vào trang này');
    setFlashData('msg_type', 'danger');
    redirect(_WEB_HOST_ROOT_ADMIN);
}

$data = [
    "data" => getAllCourse()
];


view($data);