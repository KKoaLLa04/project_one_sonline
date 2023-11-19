<div class="container-fluid">
    <a href="?module=staff&action=lists"><button class="btn btn-warning btn-sm">Quay lại</button></a>
    <hr>
    <h4>Cập nhật thông tin cộng tác viên - </h4>
    <form action="" method="post">
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="">Tên cộng tác viên</label>
                    <input type="text" class="form-control" placeholder="Tên cộng tác viên..." name="fullname">
                    <p></p>
                </div>

                <div class="form-group">
                    <label for="">Số điện thoại</label>
                    <input type="text" class="form-control" placeholder="Số điện thoại..." name="phone">
                    <p></p>
                </div>

                <div class="form-group">
                    <label for="">Mật khẩu</label>
                    <input type="password" class="form-control" placeholder="Mật khẩu..." name="password">
                    <p></p>
                </div>
            </div>

            <div class="col-6">
                <div class="form-group">
                    <label for="">Email cộng tác viên</label>
                    <input type="text" class="form-control" placeholder="Email cộng tác viên..." name="email">
                    <p></p>
                </div>

                <div class="form-group">
                    <label for="">Chức vụ</label>
                    <select name="group_id" class="form-control">
                        <option value="0">---Phân quyền cộng tác viên---</option>
                        <?php if (!empty($data['groups'])) :
                            foreach ($data['groups'] as $key => $item) : ?>
                                <option value="<?php echo $item['id'] ?>"><?php echo $item['name'] ?></option>
                        <?php endforeach;
                        endif ?>
                    </select>
                    <p></p>
                </div>

                <div class="form-group">
                    <label for="">Xác nhận mật khẩu</label>
                    <input type="password" class="form-control" placeholder="Xác nhận mật khẩu..." name="confirm_password">
                    <p></p>
                </div>
            </div>
        </div>

        <button class="btn btn-primary" type="submit">Đồng ý</button>
    </form>
</div>