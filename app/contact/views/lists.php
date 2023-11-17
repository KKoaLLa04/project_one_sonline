<?php
$msg = getFlashData('msg');
$msg_type = getFlashData('msg_type');
?>
<div class="container-fluid">
    <hr>
    <h4>Danh sách liên hệ</h4>
    <?php getMsg($msg, $msg_type) ?>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>STT</th>
                <th>Họ tên</th>
                <th>Email</th>
                <th>Số điện thoại</th>
                <th>Nội dung</th>
                <th width="10%">Trạng thái</th>
                <th width="5%">Sửa</th>
                <th width="5%">Xóa</th>
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
                        <td><a href="?module=contact&action=edit&id=<?php echo $item['id'] ?>"><button class="btn btn-warning"><i class="fa fa-edit"></i></button></a></td>
                        <td><button class="btn btn-danger"><i class="fa fa-trash"></i></button></td>
                    </tr>
            <?php endforeach;
            endif ?>
        </tbody>
    </table>

    <nav aria-label="Page navigation example" class="d-flex justify-content-end">
        <ul class="pagination">
            <li class="page-item"><a class="page-link" href="#">Trước</a></li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">Sau</a></li>
        </ul>
    </nav>
</div>