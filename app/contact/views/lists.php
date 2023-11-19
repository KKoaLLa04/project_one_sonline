<?php
$msg = getFlashData('msg');
$msg_type = getFlashData('msg_type');

$permissionData = permissionData();

$checkEdit = checkPermission($permissionData, 'contact', 'Sửa');
$checkDelete = checkPermission($permissionData, 'contact', 'Xóa');
?>
<div class="container-fluid">
    <hr>
    <h4>Danh sách liên hệ</h4>
    <?php getMsg($msg, $msg_type) ?>
    <table class="table table-bordered">
        <thead>
            <tr class="table-success">
                <th>STT</th>
                <th>Họ tên</th>
                <th>Email</th>
                <th>Số điện thoại</th>
                <th>Nội dung</th>
                <th width="10%">Trạng thái</th>
                <?php if ($checkEdit) : ?>
                    <th width="5%">Sửa</th>
                <?php endif;
                if ($checkDelete) : ?>
                    <th width="5%">Xóa</th>
                <?php endif ?>
            </tr>
        </thead>

        <tbody>
            <?php if (!empty($data['contact'])) :
                foreach ($data['contact'] as $key => $item) : ?>
                    <tr>
                        <td><?php echo $key + 1 ?></td>
                        <td><?php echo $item['fullname'] ?></td>
                        <td><?php echo $item['email'] ?></td>
                        <td><?php echo $item['phone'] ?></td>
                        <td><?php echo $item['content'] ?></td>
                        <td class="text-center">
                            <?php echo ($item['status'] == 0) ? '<a href="?module=contact&action=status&id=' . $item['id'] . '"><button class="btn btn-warning">Chưa duyệt</button></a>' : '<a href="?module=contact&action=status&id=' . $item['id'] . '"><button class="btn btn-success">Đã duyệt</button></a>' ?>
                        </td>
                        <?php if ($checkEdit) : ?>
                            <td><a href="?module=contact&action=edit&id=<?php echo $item['id'] ?>"><button class="btn btn-warning"><i class="fa fa-edit"></i></button></a></td>
                        <?php endif;
                        if ($checkDelete) : ?>
                            <td><button class="btn btn-danger"><i class="fa fa-trash"></i></button></td>
                        <?php endif ?>
                    </tr>
            <?php endforeach;
            endif ?>
        </tbody>
    </table>

    <nav aria-label="Page navigation example" class="d-flex justify-content-end">
        <ul class="pagination">
            <?php if ($data['page'] > 1) : ?>
                <li class="page-item"><a class="page-link" href="#">Trước</a></li>
            <?php
            endif;;
            for ($i = 1; $i <= $data['maxPage']; $i++) : ?>
                <li class="page-item <?php echo $data['page'] == $i ? 'active' : false ?>"><a class="page-link" href="?module=contact&action=lists&page=<?php echo $i ?>"><?php echo $i ?></a></li>
            <?php endfor;
            if ($data['page'] < $data['maxPage']) :
            ?>
                <li class="page-item"><a class="page-link" href="#">Sau</a></li>
            <?php endif ?>
        </ul>
    </nav>
</div>