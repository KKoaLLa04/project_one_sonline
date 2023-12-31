<?php
$msg = getFlashData('msg');
$msg_type = getFlashData('msg_type');

$permissionData = permissionData();
$checkAdd = checkPermission($permissionData, 'book_category', 'Thêm');
$checkEdit = checkPermission($permissionData, 'book_category', 'Sửa');
$checkDelete = checkPermission($permissionData, 'book_category', 'Xóa');
?>
<div class="container-fluid">
    <?php if($checkAdd): ?>
    <a href="?module=book_category&action=add"><button class="btn btn-success">Thêm danh mục sách mới <i
                class="fa fa-plus"></i></button></a>
    <?php endif ?>
    <hr>
    <h4>Danh sách danh mục sách</h4>
    <?php getMsg($msg, $msg_type) ?>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>STT</th>
                <th>Tiêu đề</th>
                <th>Thời gian tạo</th>
                <?php if($checkEdit): ?>
                <th width="5%">Sửa</th>
                <?php endif;
                    if($checkDelete):
                ?>
                <th width="5%">Xóa</th>
                <?php endif ?>
            </tr>
        </thead>

        <tbody>
            <?php if (!empty($data['book_category'])) :
                foreach ($data['book_category'] as $key => $item) : ?>
            <tr>
                <td><?php echo $key + 1 ?></td>
                <td><?php echo $item['title'] ?></td>
                <td><?php echo !empty($item['create_at']) ? $item['create_at'] : '1-1-2023' ?></td>
                <?php if($checkEdit): ?>
                <td><a href="?module=book_category&action=edit&id=<?php echo $item['id'] ?>"><button
                            class="btn btn-warning"><i class="fa fa-edit"></i></button></a></td>
                <?php endif;
                         if($checkDelete): 
                         ?>
                <td><a href="?module=book_category&action=delete&id=<?php echo $item['id'] ?>"
                        onclick="return confirm('Bạn có chắc chắn muốn xóa?')"><button class="btn btn-danger"><i
                                class="fa fa-trash"></i></button></a></td>
                <?php endif ?>
            </tr>
            <?php endforeach;
            endif ?>
        </tbody>
    </table>
</div>