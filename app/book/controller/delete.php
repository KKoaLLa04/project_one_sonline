<?php
$permissionData = permissionData();

if (!checkPermission($permissionData, 'book', 'Xóa')) {
    setFlashData('msg', 'Bạn không có quyền truy cập vào trang này');
    setFlashData('msg_type', 'danger');
    redirect(_WEB_HOST_ROOT_ADMIN);
}
if (!empty($_GET['id']) && $_GET['id'] != '') {
    $id = $_GET['id'];

    $condition = 'id = ' . $id;

    $deleteStatus = delete('book', $condition);
    if (!empty($deleteStatus)) {
        setFlashData('msg', 'Xóa sách thành công');
        setFlashData('msg_type', 'success');
    } else {
        setFlashData('msg', 'Lỗi hệ thống, vui lòng thử lại sau');
        setFlashData('msg_type', 'danger');
    }
} else {
    setFlashData('msg', 'Liên kết không tồn tại hoặc đã hết hạn!');
    setFlashData('msg_type', 'danger');
}

redirect('?module=book&action=lists');
