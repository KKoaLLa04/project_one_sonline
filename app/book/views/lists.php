<?php
$msg = getFlashData('msg');
$msg_type = getFlashData('msg_type');

$permissionData = permissionData();

$checkAdd = checkPermission($permissionData, 'book', 'Thêm');
$checkEdit = checkPermission($permissionData, 'book', 'Sửa');
$checkDelete = checkPermission($permissionData, 'book', 'Xóa');
?>
<div class="container-fluid">
    <?php if ($checkAdd) : ?>
    <a href="?module=book&action=add"><button class="btn btn-success">Thêm sách mới <i
                class="fa fa-plus"></i></button></a>
    <?php endif ?>
    <hr>
    <h4>Danh sách đầu sách</h4>
    <?php getMsg($msg, $msg_type) ?>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th width="3%">STT</th>
                <th>Ảnh MH</th>
                <th>Tiêu đề sách</th>
                <th>Giá</th>
                <th>Tác giả</th>
                <th width="9%">Tình trạng</th>
                <th>Mô tả</th>
                <?php if ($checkEdit) : ?>
                <th width="5%">Sửa</th>
                <?php endif;
                if ($checkDelete) : ?>
                <th width="5%">Xóa</th>
                <?php endif ?>
            </tr>
        </thead>

        <tbody>
            <?php if (!empty($data['book'])) :
                foreach ($data['book'] as $key => $item) : ?>
            <tr>
                <td><?php echo $key + 1 ?></td>
                <td><?php echo $item['thumbnail'] ?></td>
                <td><?php echo $item['name'] ?></td>
                <td><?php echo $item['price'] ?></td>
                <td><?php echo $item['author'] ?></td>
                <td><?php echo (!empty($item['status']) && $item['status'] == 1) ? '<button class="btn btn-primary btn-sm">Còn hàng</button>' : '<button class="btn btn-warning btn-sm">Hết hàng</button>' ?>
                </td>
                <td><?php echo $item['description'] ?></td>
                <?php if($checkEdit): ?>
                <td><a href="?module=book&action=edit&id=<?php echo $item['id'] ?>"><button class="btn btn-warning"><i
                                class="fa fa-edit"></i></button></a></td>
                <?php endif;
                        if($checkDelete): ?>
                <td><a href="?module=book&action=delete&id=<?php echo $item['id'] ?>"
                        onclick="return confirm('Bạn có chắc chắn muốn xóa?')"><button class="btn btn-danger"><i
                                class="fa fa-trash"></i></button></a></td>
                <?php endif; ?>
            </tr>
            <?php endforeach;
            endif ?>
        </tbody>
    </table>
</div>