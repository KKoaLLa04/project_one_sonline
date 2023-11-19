<?php

require_once './book/model/book.php';

$permissionData = permissionData();

if (!checkPermission($permissionData, 'book', 'Sửa')) {
    setFlashData('msg', 'Bạn không có quyền truy cập vào trang này');
    setFlashData('msg_type', 'danger');
    redirect(_WEB_HOST_ROOT_ADMIN);
}

if (!empty($_GET['id'])) {
    $id = $_GET['id'];

    $bookDetail = getBookDetail($id);
}

if (isPost()) {
    $body = getBody();
    $id = $body['id'];
    $errors = [];
    // validate
    if (empty($body['name'])) {
        $errors['name'] = 'Tên đầu sách không được để trống';
    }

    if (empty($body['author'])) {
        $errors['author'] = 'Tên tác giả không được để trống';
    }

    if (empty($body['description'])) {
        $errors['description'] = 'Mô tả không được để trống';
    }

    if (empty($body['content'])) {
        $errors['content'] = 'Nội dung không được để trống';
    }

    if (empty($body['book_id'])) {
        $errors['book_id'] = 'Danh mục sách bắt buộc phải chọn';
    }

    if (empty($body['price'])) {
        $errors['price'] = 'Giá không được để trống';
    } else {
        if (!isNumberFloat($body['price'])) {
            $errors['price'] = 'Giá phải là 1 số';
        }
    }

    if (empty($errors)) {

        $dataUpdate = [
            'name' => trim($body['name']),
            'author' => trim($body['author']),
            'description' => trim($body['description']),
            'content' => trim($body['content']),
            'thumbnail' => trim($body['thumbnail']),
            'price' => trim($body['price']),
            'status' => trim($body['status']),
            'book_id' => trim($body['book_id']),
            'update_at' => date('Y-m-d H:i:s')
        ];

        $condition = "id=$id";

        $updateStatus = update('book', $dataUpdate, $condition);

        if (!empty($updateStatus)) {
            setFlashData('msg', 'Cập nhật đầu sách thành công!');
            setFlashData('msg_type', 'success');
        } else {
            setFlashData('msg', 'Lỗi dữ liệu, vui lòng thử lại sau!');
            setFlashData('msg_type', 'danger');
        }
    } else {
        setFlashData('msg', 'Dữ liệu không hợp lệ, vui lòng kiểm tra lại!');
        setFlashData('msg_type', 'danger');
        setFlashData('errors', $errors);
        setFlashData('old', $body);
    }

    redirect('?module=book&action=edit&id=' . $id);
}


$data = [
    'book_category' => getAllBookCate(),
    'book_detail' => $bookDetail,
    'id' => $id
];

view($data);
