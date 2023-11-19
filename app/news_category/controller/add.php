<?php

$permissionData = permissionData();

if (!checkPermission($permissionData, 'news_category', 'Thêm')) {
    setFlashData('msg', 'Bạn không có quyền truy cập vào trang này');
    setFlashData('msg_type', 'danger');
    redirect(_WEB_HOST_ROOT_ADMIN);
}

if (isPost()) {
    $body = getBody();

    $errors = [];

    // validate
    if (empty(trim($body['title']))) {
        $errors['title'] = 'Tiêu đề danh mục tin tức không được để trống';
    }

    if (empty($errors)) {
        $dataInsert = [
            'title' => trim($body['title']),
            'create_at' => date('Y-m-d H:i:S')
        ];

        $insertStatus = insert('news_category', $dataInsert);

        if (!empty($insertStatus)) {
            setFlashData('msg', 'Thêm danh mục tin tức thành công!');
            setFlashData('msg_type', 'success');
        } else {
            setFlashData('msg', 'Lỗi hệ thống, vui lòng thử lại sau!');
            setFlashData('msg_type', 'danger');
        }
    } else {
        setFlashData('msg', 'Dữ liệu không hợp lệ, vui lòng kiểm tra lại!');
        setFlashData('msg_type', 'danger');
        setFlashData('errors', $errors);
        setFlashData('old', $body);
    }

    redirect("?module=news_category&action=add");
}

view();
