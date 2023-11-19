<?php

require_once './student/model/student.php';

$permissionData = permissionData();

if (!checkPermission($permissionData, 'student', 'Xem')) {
    setFlashData('msg', 'Bạn không có quyền truy cập vào trang này');
    setFlashData('msg_type', 'danger');
    redirect(_WEB_HOST_ROOT_ADMIN);
}

$data = [
    'student' => getAllStudent(),
];
view($data);
