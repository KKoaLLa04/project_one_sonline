<?php

require_once './contact/model/contact.php';

if (!empty($_GET['id'])) {
    $id = $_GET['id'];

    $contactDetail = getContactDetail($id);
    if (empty($contactDetail)) {
        setFlashData('msg', 'Liên hệ không tồn tại hoặc đã bị xóa!');
        setFlashData('msg_type', 'danger');
        redirect('?module=contact&action=lists');
    }
} else {
    setFlashData('msg', 'Liên kết không tồn tại hoặc đã hết hạn!');
    setFlashData('msg_type', 'danger');
    redirect('?module=contact&action=lists');
}

if (isPost()) {
    $body = getBody();

    $errors = [];
    // validate

    $dataUpdate = [
        'note' => trim($body['note']),
        'status' => trim($body['status']),
        'update_at' => date('Y-m-d H:i:s'),
    ];

    $condition = "id=$id";

    $updateStatus = update('contact', $dataUpdate, $condition);

    if (!empty($updateStatus)) {
        setFlashData('msg', 'Ghi chú liên hệ thành công!');
        setFlashData('msg_type', 'success');
    }

    redirect('?module=contact&action=lists');
}


$data = [
    'contact_detail' => $contactDetail,
];

view($data);
