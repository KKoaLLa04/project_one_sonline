<?php

if (!empty($_GET['vnp_BankTranNo'])) {
    $studentDetail = isLoginStudent();
    $studentId = $studentDetail['id'];
    $code = $_GET['code'];
    $body = getSession('body');
    $dataInsert = [
        'name' => trim($body['fullname']),
        'email' => trim($body['email']),
        'address' => trim($body['address']),
        'phone' => trim($body['phone']),
        'pay' => trim($body['payment']),
        'client_id' => $studentId,
        'total' => trim($body['total']),
        'status' => 0,
        'code' => trim($code),
        'create_at' => date('Y-m-d H:i:s'),
    ];

    $insertStatus = insert('bill', $dataInsert);

    if (!empty($insertStatus)) {
        $dataUpdate = [
            'code_id' => $code,
            'status' => 1
        ];
        $condition = "student_id=$studentId AND status=0";

        $updateStatus = update('cart', $dataUpdate, $condition);
    }
    $vnp_Amount = $_GET['vnp_Amount'];
    $vnp_BankCode = $_GET['vnp_BankCode'];
    $vnp_BankTranNo = $_GET['vnp_BankTranNo'];
    $vnp_CardType = $_GET['vnp_CardType'];
    $vnp_OrderInfo = $_GET['vnp_OrderInfo'];
    $vnp_PayDate = $_GET['vnp_PayDate'];
    $vnp_TmnCode = $_GET['vnp_TmnCode'];
    $vnp_TransactionNo = $_GET['vnp_TransactionNo'];
    $code_cart = $code;

    $dataInsert = [
        'vnp_Amount' => $vnp_Amount,
        'vnp_BankCode' => $vnp_BankCode,
        'vnp_BankTranNo' => $vnp_BankTranNo,
        'vnp_CardType' => $vnp_CardType,
        'vnp_OrderInfo' => $vnp_OrderInfo,
        'vnp_PayDate' => $vnp_PayDate,
        'vnp_TmnCode' => $vnp_TmnCode,
        'vnp_TransactionNo' => $vnp_TransactionNo,
        'code_cart' => $code_cart,
    ];
    $insertStatus = insert('vnpay', $dataInsert);
    if (!empty($insertStatus)) {
        setFlashData('msg', 'Bạn đã đặt hàng thành công!');
        setFlashData('msg_type', 'success');
    } else {
        setFlashData('msg', 'Lỗi hệ thống, vui lòng liên hệ quản trị viên');
        setFlashData('msg_type', 'danger');
    }
} else {
    redirect('?module=cart&action=pay');
}

redirect('?module=cart&action=thanks&code=' . $code_cart);
