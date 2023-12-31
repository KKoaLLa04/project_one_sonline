<?php
$msg = getFlashData('msg');
$msg_type = getFlashData('msg_type');

$permissionData = permissionData();

$checkAdd = checkPermission($permissionData, 'exam', 'Thêm');
$checkEdit = checkPermission($permissionData, 'exam', 'Sửa');
$checkDelete = checkPermission($permissionData, 'exam', 'Xóa');
?>
<div class="container-fluid">
    <?php if ($checkAdd) : ?>
    <a href="?module=exam&action=add"><button class="btn btn-success">Thêm đề thi mới <i
                class="fa fa-plus"></i></button></a>
    <?php endif ?>
    <hr>
    <h4>Danh sách đề thi</h4>
    <?php getMsg($msg, $msg_type) ?>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th width="3%">STT</th>
                <th>Tiêu đề</th>
                <th>Mô tả ngắn</th>
                <th>Danh mục</th>
                <th width="10%">Chi Tiết</th>
                <?php if ($checkEdit) : ?>
                <th width="5%">Sửa</th>
                <?php endif;
                if ($checkDelete) : ?>
                <th width="5%">Xóa</th>
                <?php endif ?>
            </tr>
        </thead>

        <tbody>
            <?php if (!empty($data['exam_control'])) :
                foreach ($data['exam_control'] as $key => $item) : ?>
            <tr>
                <td><?php echo $key + 1 ?></td>
                <td><?php echo $item['title'] ?></td>
                <td><?php echo $item['description'] ?></td>
                <td><?php echo $item['name'] ?></td>
                <td><a href="<?php echo _WEB_HOST_ROOT ?>?module=exam_online&action=detail&id=<?php echo $item['id'] ?>"
                        target="_blank"><button class="btn btn-primary">Xem chi tiết</button></a></td>
                <?php if($checkEdit): ?>
                <td><a href="?module=exam&action=edit&id=<?php echo $item['id'] ?>"><button class="btn btn-warning"><i
                                class="fa fa-edit"></i></button></a></td>
                <?php endif;
                        if($checkDelete): ?>
                <td><a href="?module=exam&action=delete&id=<?php echo $item['id'] ?>"
                        onclick="return confirm('Bạn có chắc chắn muốn xóa?')"><button class="btn btn-danger"><i
                                class="fa fa-trash"></i></button></a></td>
                <?php endif ?>
            </tr>
            <?php endforeach;
            endif; ?>
        </tbody>
    </table>
</div>