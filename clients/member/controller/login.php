<?php

require_once './clients/member/model/member.php';

if (isPost()) {
    $body = getBody();

    if (!empty(trim($body['email']))) {
        $email = trim($body['email']);

        $checkAccount = checkAccount($email);
        if (!empty($checkAccount)) {
            $password = trim($body['password']);
            $password_hash = $checkAccount['password'];

            if (password_verify($password, $password_hash)) {
                setSession('login', $checkAccount);

                if (!empty($checkAccount['token'])) {
                    setFlashData('msg', 'Tài khoản của bạn chưa được kích hoạt vui lòng vào email để kích hoạt tài khoản');
                    setFlashData('msg_type', 'danger');
                } else {
                    redirect('index.php');
                }
            } else {
                setFlashData('msg', 'Mật khẩu sai, vui lòng thử lại!');
                setFlashData('msg_type', 'danger');
            }
        } else {
            setFlashData('msg', 'Email không tồn tại trong hệ thống!');
            setFlashData('msg_type', 'danger');
        }
    } else {
        setFlashData('msg', 'Vui lòng nhập email');
        setFlashData('msg_type', 'danger');
    }

    redirect('?module=member&action=login');
}

return viewClient();
