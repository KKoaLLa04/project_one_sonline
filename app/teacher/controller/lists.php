<?php

require_once './teacher/model/teacher.php';

$permissionData = permissionData();

if (!checkPermission($permissionData, 'teacher', 'Xem')) {
    setFlashData('msg', 'Bạn không có quyền truy cập vào trang này');
    setFlashData('msg_type', 'danger');
    redirect(_WEB_HOST_ROOT_ADMIN);
}

$data = [
    'teachers' => getAllTeacher(),
];

view($data);