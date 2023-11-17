<?php

require_once './contact/model/contact.php';

if (!empty($_GET['id'])) {
    $id = $_GET['id'];

    $statusDetail = getStatusDetail($id);

    $status = $statusDetail['status'];

    if ($status == 0) {
        $dataUpdate['status'] = 1;
    } else if ($status == 1) {
        $dataUpdate['status'] = 0;
    }

    $condition = "id=$id";

    $updateStatus = update('contact', $dataUpdate, $condition);
} else {
    setFlashData('msg', 'Liên hệ không tồn tại hoặc đã bị xóa!');
    setFlashData('msg_type', 'danger');
}

redirect('?module=contact&action=lists');
