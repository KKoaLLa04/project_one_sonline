<?php

$permissionData = permissionData();

$checkAdd = checkPermission($permissionData, 'exam_category', 'Thêm');
$checkEdit = checkPermission($permissionData, 'exam_category', 'Sửa');
$checkDelete = checkPermission($permissionData, 'exam_category', 'Xóa');

?>
<div class="container-fluid">
    <?php if ($checkAdd) : ?>
        <a href="?module=exam_category&action=add"><button class="btn btn-success">Thêm danh mục đề thi mới <i class="fa fa-plus"></i></button></a>
    <?php endif ?>
    <hr>
    <h4>Danh mục đề thi</h4>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>STT</th>
                <th>Tên danh mục</th>
                <th>Tạo bởi (update..)</th>
                <?php if ($checkEdit) : ?>
                    <th width="5%">Sửa</th>
                <?php endif;
                if ($checkDelete) : ?>
                    <th width="5%">Xóa</th>
                <?php endif ?>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($data['exam_cate'])) :
                foreach ($data['exam_cate'] as $key => $item) : ?>
                    <tr>
                        <td><?php echo $key + 1 ?></td>
                        <td><?php echo $item['name'] ?></td>
                        <td>1</td>
                        <?php if ($checkEdit) : ?>
                            <td><a href="#"><button class="btn btn-warning"><i class="fa fa-edit"></i></button></a></td>
                        <?php endif;
                        if ($checkDelete) : ?>
                            <td><a href="#"><button class="btn btn-danger"><i class="fa fa-trash"></i></button></a></td>
                        <?php endif ?>
                    </tr>
            <?php endforeach;
            endif ?>
        </tbody>
    </table>
</div>