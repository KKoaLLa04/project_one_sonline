<div class="container-fluid">
    <hr>
    <h4>Danh sách liên hệ</h4>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>STT</th>
                <th>Họ tên</th>
                <th>Email</th>
                <th>Số điện thoại</th>
                <th>Nội dung</th>
                <th width="9%">Trạng thái</th>
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
                        <td><?php echo (!empty($item['status']) && $item['status'] == 0) ? '<button class="btn btn-warning">Chưa duyệt</button>' : '<button class="btn btn-success">Đã duyệt</button>' ?>
                        </td>
                        <td><a href="?module=contact&action=edit&id=<?php echo $item['id'] ?>"><button class="btn btn-warning"><i class="fa fa-edit"></i></button></a></td>
                        <td><button class="btn btn-danger"><i class="fa fa-trash"></i></button></td>
                    </tr>
            <?php endforeach;
            endif ?>
        </tbody>
    </table>
</div>