<?php

require_once './exam/model/exam.php';

$permissionData = permissionData();

if (!checkPermission($permissionData, 'exam', 'Xem')) {
    setFlashData('msg', 'Bạn không có quyền truy cập vào trang này');
    setFlashData('msg_type', 'danger');
    redirect(_WEB_HOST_ROOT_ADMIN);
}

$data = [
    'exam_control' => getAllExam(),
];
view($data);
