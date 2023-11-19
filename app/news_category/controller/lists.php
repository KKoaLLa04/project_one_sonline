<?php

require_once './news_category/model/news.php';

$permissionData = permissionData();

if (!checkPermission($permissionData, 'news_category', 'Xem')) {
    setFlashData('msg', 'Bạn không có quyền truy cập vào trang này');
    setFlashData('msg_type', 'danger');
    redirect(_WEB_HOST_ROOT_ADMIN);
}

$data = [
    'news_category' => getAllNewsCate(),
];
view($data);
