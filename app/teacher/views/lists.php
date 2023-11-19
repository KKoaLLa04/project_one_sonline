<?php
$msg = getFlashData('msg');
$msg_type = getFlashData('msg_type');

$permissionData = permissionData();

$checkAdd = checkPermission($permissionData, 'teacher', 'Thêm');
$checkEdit = checkPermission($permissionData, 'teacher', 'Sửa');
$checkDelete = checkPermission($permissionData, 'teacher', 'Xóa');
?>
<div class="container-fluid">
    <?php if($checkAdd): ?>
    <a href="?module=teacher&action=add"><button class="btn btn-success">Thêm giảng viên mới <i
                class="fa fa-plus"></i></button></a>
    <?php endif ?>
    <hr>
    <h4>Danh sách giảng viên đào tạo</h4>
    <?php getMsg($msg,$msg_type) ?>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>STT</th>
                <th>Tên</th>
                <th>Email</th>
                <th>Số điện thoại</th>
                <th>Kinh Nghiệm</th>
                <?php if($checkEdit): ?>
                <th width="5%">Sửa</th>
                <?php endif; if($checkDelete): ?>
                <th width="5%">Xóa</th>
                <?php endif ?>
            </tr>
        </thead>

        <tbody>
            <?php if (!empty($data['teachers'])) :
                foreach ($data['teachers'] as $key => $item) : ?>
            <tr>
                <td><?php echo $key + 1 ?></td>
                <td><?php echo $item['fullname'] ?></td>
                <td><?php echo $item['email'] ?></td>
                <td><?php echo $item['phone'] ?></td>
                <td><?php echo $item['exp'] ?> năm</td>
                <?php if($checkEdit): ?>
                <td><a href="?module=teacher&action=edit&id=<?php echo $item['id'] ?>"><button
                            class="btn btn-warning"><i class="fa fa-edit"></i></button></a></td>
                <?php endif; if($checkDelete): ?>
                <td><a href="?module=teacher&action=delete&id=<?php echo $item['id'] ?>"
                        onclick="return confirm('Bạn có chắc chắn muốn xóa?')"><button class="btn btn-danger"><i
                                class="fa fa-trash"></i></button></a></td>
                <?php endif ?>
            </tr>
            <?php endforeach;
            endif ?>
        </tbody>
    </table>
</div>