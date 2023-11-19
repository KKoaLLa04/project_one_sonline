<?php

require_once './module/model/module.php';

$permissionData = permissionData();

if (!checkPermission($permissionData, 'module', 'Xem')) {
    setFlashData('msg', 'Bạn không có quyền truy cập vào trang này');
    setFlashData('msg_type', 'danger');
    redirect(_WEB_HOST_ROOT_ADMIN);
}

$data = [
    'module' => getAllModule()
];

view($data);
