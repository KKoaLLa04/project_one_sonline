<?php

if (!empty($_GET['id']) && $_GET['id'] != '') {
    $id = $_GET['id'];

    $condition = 'id = ' . $id;

    $deleteStatus = delete('test', $condition);
    if (!empty($deleteStatus)) {
        setFlashData('msg', 'Xóa bài thi thành công');
        setFlashData('msg_type', 'success');
    } else {
        setFlashData('msg', 'Lỗi hệ thống, vui lòng thử lại sau');
        setFlashData('msg_type', 'danger');
    }
} else {
    setFlashData('msg', 'Liên kết không tồn tại hoặc đã hết hạn!');
    setFlashData('msg_type', 'danger');
}

redirect('?module=test&action=lists');
