<?php

require_once 'test/model/test.php';

if (!empty($_GET['id'])) {
    $id = $_GET['id'];
} else {
    setFlashData('msg', 'Liên kết không tồn tại hoặc đã hết hạn!');
    setFlashData('msg_type', 'danger');
}

if (isPost()) {
    $body = getBody();

    $errors = [];
    // validate
    if (empty(trim($body['name']))) {
        $errors['name'] = 'Tiêu đề không được để trống...';
    }

    if (empty($errors)) {
        $dataUpdate = [
            'name' => trim($body['name']),
            'update_at' => date('Y-m-d H:i:s'),
        ];

        $condition = "id=$id";

        $updateStatus = update('test_category', $dataUpdate, $condition);

        if (!empty($updateStatus)) {
            setFlashData('msg', 'Cập nhật danh mục thi online thành công');
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

    redirect('?module=test&action=category&id=' . $id);
}

$dataCate = [
    'cate_detail' => getTestDetail($id),
];

view($dataCate, 'edit_category');
