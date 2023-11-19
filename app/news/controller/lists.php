<?php

require_once './news/model/news.php';

$permissionData = permissionData();

if (!checkPermission($permissionData, 'news', 'Xem')) {
    setFlashData('msg', 'Bạn không có quyền truy cập vào trang này');
    setFlashData('msg_type', 'danger');
    redirect(_WEB_HOST_ROOT_ADMIN);
}


$data = [
    'news' => getAllNews(),
];

view($data);
