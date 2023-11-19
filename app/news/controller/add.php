<?php

$permissionData = permissionData();

if (!checkPermission($permissionData, 'news', 'Thêm')) {
    setFlashData('msg', 'Bạn không có quyền truy cập vào trang này');
    setFlashData('msg_type', 'danger');
    redirect(_WEB_HOST_ROOT_ADMIN);
}

if (isPost()) {
    $body = getBody();

    $errors = [];

    // validate
    if (empty(trim($body['title']))) {
        $errors['title'] = 'Tiêu đề tin tức không được để trống...';
    }

    if (empty(trim($body['content']))) {
        $errors['content'] = 'Nội dung tin tức không được để trống...';
    }

    if (empty($errors)) {
        $dataInsert = [
            'title' => trim($body['title']),
            'thumbnail' => trim($body['thumbnail']),
            'content' => trim($body['content']),
            'create_at' => date('Y-m-d H:i:s'),
        ];

        $insertStatus = insert('news', $dataInsert);

        if (!empty($insertStatus)) {
            setFlashData('msg', 'Thêm tin tức mới thành công!');
            setFlashData('msg_type', 'success');
        } else {
            setFlashData('msg', 'Lỗi hệ thống, vui lòng thử lại sau!');
            setFlashData('msg_type', 'danger');
        }
    } else {
        setFlashData('msg', 'Lỗi dữ liệu, vui lòng kiểm tra lại!');
        setFlashData('msg_type', 'danger');
        setFlashData('errors', $errors);
        setFlashData('old', $body);
    }

    redirect('?module=news&action=add');
}

view();
