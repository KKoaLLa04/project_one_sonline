<?php
$msg = getFlashData('msg');
$msg_type = getFlashData('msg_type');

$permissionData = permissionData();

$checkAdd = checkPermission($permissionData, 'student', 'Thêm');
$checkEdit = checkPermission($permissionData, 'student', 'Sửa');
$checkDelete = checkPermission($permissionData, 'student', 'Xóa');
?>
<div class="container-fluid">
    <?php if($checkAdd): ?>
    <a href="?module=student&action=add"><button class="btn btn-success">Thêm học viên mới <i
                class="fa fa-plus"></i></button></a>
    <?php endif ?>
    <hr>
    <h4>Danh sách học viên</h4>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th width="3%">STT</th>
                <th>Họ tên</th>
                <th>Email</th>
                <th>Số điện thoại</th>
                <th width="10%">Tình trạng</th>
                <th width="10%">Quyền</th>
                <?php if($checkEdit): ?>
                <th width="5%">Sửa</th>
                <?php endif;
                if($checkDelete): ?>
                <th width="5%">Xóa</th>
                <?php endif ?>
            </tr>
        </thead>

        <tbody>
            <?php if (!empty($data['student'])) :
                foreach ($data['student'] as $key => $item) : ?>
            <tr>
                <td><?php echo $key + 1 ?></td>
                <td><?php echo $item['fullname'] ?></td>
                <td><?php echo $item['email'] ?></td>
                <td><?php echo $item['phone'] ?></td>
                <td class="text-center">
                    <?php echo ($item['status'] == 0) ? '<button class="btn btn-warning btn-sm">Chưa kích hoạt</button>' : '<button class="btn btn-success btn-sm">Kích hoạt</button>' ?>
                </td>
                <td class="text-center">
                    <?php echo ($item['role'] == 0) ? '<button class="btn btn-primary btn-sm">Học Viên</button>' : '<button class="btn btn-success btn-sm">Super Admin</button>' ?>
                </td>
                <?php if($checkEdit): ?>
                <td><a href="#"><button class="btn btn-warning"><i class="fa fa-edit"></i></button></a></td>
                <?php endif; if($checkDelete): ?>
                <td><a href="#"><button class="btn btn-danger"><i class="fa fa-trash"></i></button></a></td>
                <?php endif ?>
            </tr>
            <?php endforeach;
            endif ?>
        </tbody>
    </table>
</div>