<?php

require_once './clients/book/model/book.php';

if (!empty($_GET['book_id'])) {
    $id = $_GET['book_id'];

    $bookDetail = getBookDetail($id);

    if (!empty($bookDetail)) {
        $loginDetail = isLoginStudent();
        $loginId = $loginDetail['id'];

        $checkCartBook = checkCartBook($id);
        if ($checkCartBook == 0) {
            $dataInsert = [
                'name' => trim($bookDetail['name']),
                'images' => trim($bookDetail['thumbnail']),
                'price' => trim($bookDetail['price']),
                'quantity' => 1,
                'student_id' => $loginId,
                'book_id' => $id,
                'code_id' => null,
                'create_at' => date('Y-m-d H:i:s'),
            ];

            $insertStatus = insert('cart', $dataInsert);
        } else {
            $cartDetail = cartDetail($id);
            $quantity = $cartDetail['quantity'];
            $quantity++;
            $dataUpdate = [
                'quantity' => $quantity,
            ];

            $condition = "book_id=$id";
            $updateStatus = update('cart', $dataUpdate, $condition);
        }

        if (!empty($insertStatus) || !empty($updateStatus)) {
            setFlashData('msg', 'Thêm sản phẩm vào giỏ hàng thành công');
            setFlashData('msg_type', 'success');
            redirect('?module=book&action=detail&id=' . $id);
        } else {
            setFlashData('msg', 'lỗi hệ thống, vui lòng thử lại sau');
            setFlashData('msg_type', 'success');
            redirect('?module=book&action=lists');
        }
    } else {
        setFlashData('msg', 'Sản phẩm không tồn tại hoặc đã bị xóa!');
        setFlashData('msg_type', 'danger');
        redirect('?module=book&action=lists');
    }
} else {
    setFlashData('msg', 'Liên kết không tồn tại hoặc đã hết hạn!');
    setFlashData('msg_type', 'danger');
    redirect('?module=book&action=lists');
}
