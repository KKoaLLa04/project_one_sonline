<?php
$msg = getFlashData('msg');
$msg_type = getFlashData('msg_type');

$permissionData = permissionData();

$checkAdd = checkPermission($permissionData, 'module', 'Thêm');
$checkEdit = checkPermission($permissionData, 'module', 'Sửa');
$checkDelete = checkPermission($permissionData, 'module', 'Xóa');
?>
<div class="container-fluid">
    <?php if($checkAdd): ?>
    <a href="?module=module&action=add"><button class="btn btn-success">Thêm chương mới <i
                class="fa fa-plus"></i></button></a>
    <?php endif ?>
    <hr>
    <h4>Danh sách các chương học</h4>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th width="5%">STT</th>
                <th>Tiêu đề chương</th>
                <th>Khóa học</th>
                <?php if($checkEdit): ?>
                <th width="5%">Sửa</th>
                <?php endif; 
                if($checkDelete): ?>
                <th width="5%">Xóa</th>
                <?php endif ?>
            </tr>
        </thead>

        <tbody>
            <?php if (!empty($data['module'])) :
                foreach ($data['module'] as $key => $item) : ?>
            <tr>
                <td><?php echo $key + 1 ?></td>
                <td><?php echo $item['title'] ?></td>
                <td><?php echo $item['course_title'] ?></td>
                <?php if($checkEdit): ?>
                <td><a href="?module=module&action=edit&id=<?php echo $item['id'] ?>"><button class="btn btn-warning"><i
                                class="fa fa-edit"></i></button></a></td>
                <?php endif; 
                                if($checkDelete): ?>
                <td><a href="?module=module&action=delete&id=<?php echo $item['id'] ?>"
                        onclick="return confirm('Bạn có chắc chắn muốn xóa?')"><button class="btn btn-danger"><i
                                class="fa fa-trash"></i></button></a>
                </td>
                <?php endif ?>
            </tr>
            <?php endforeach;
            endif ?>
        </tbody>
    </table>
</div>