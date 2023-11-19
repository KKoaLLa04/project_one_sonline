<?php
$msg = getFlashData('msg');
$msg_type = getFlashData('msg_type');

$permissionData = permissionData();

$checkAdd = checkPermission($permissionData, 'lesson', 'Thêm');
$checkEdit = checkPermission($permissionData, 'lesson', 'Sửa');
$checkDelete = checkPermission($permissionData, 'lesson', 'Xóa');
?>
<div class="container-fluid">
    <?php if($checkAdd): ?>
    <a href="?module=lesson&action=add"><button class="btn btn-success">Thêm bài học mới <i
                class="fa fa-plus"></i></button></a>
    <?php endif ?>
    <hr>
    <h4>Danh sách bài học</h4>
    <?php getMsg($msg, $msg_type) ?>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th width="3%">STT</th>
                <th>Tiêu đề</th>
                <th>Chương</th>
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
            <?php if (!empty($data['lesson'])) :
                foreach ($data['lesson'] as $key => $item) : ?>
            <tr>
                <td><?php echo $key + 1 ?></td>
                <td><?php echo $item['title'] ?></td>
                <td><?php echo $item['module_name'] ?></td>
                <td><?php echo $item['course_name'] ?></td>
                <?php if($checkEdit): ?>
                <td><a href="?module=lesson&action=edit&id=<?php echo $item['id'] ?>"><button class="btn btn-warning"><i
                                class="fa fa-edit"></i></button></a></td>
                <?php endif;
                        if($checkDelete): ?>
                <td><a href="?module=lesson&action=delete&id=<?php echo $item['id'] ?>"
                        onclick="return confirm('Bạn có chắc chắn muốn xóa?')"><button class="btn btn-danger"><i
                                class="fa fa-trash"></i></button></a></td>
                <?php endif ?>
            </tr>
            <?php endforeach;
            endif; ?>
        </tbody>
    </table>
</div>