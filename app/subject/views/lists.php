<?php
$msg = getFlashData('msg');
$msg_type = getFlashData('msg_type');
?>
<div class="container-fluid">
    <a href="?module=subject&action=add"><button class="btn btn-success">Thêm khóa học mới <i
                class="fa fa-plus"></i></button></a>
    <hr>
    <h4>Danh sách khóa học</h4>
    <?php getMsg($msg,$msg_type) ?>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>STT</th>
                <th>Ảnh</th>
                <th>tiêu đề</th>
                <th>Khóa học</th>
                <th>giá</th>
                <th>giảng viên</th>
                <th width="5%">Sửa</th>
                <th width="5%">Xóa</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($data['data'])) :
                foreach ($data['data'] as $key => $item) : ?>
            <tr>
                <td><?php echo $key + 1; ?></td>
                <td><?php echo $item['thumbnail']; ?></td>
                <td><?php echo $item['title']; ?></td>
                <td><a href="#"><?php echo $item['cate_name'] ?></a></td>
                <td><?php echo $item['price']; ?></td>
                <td>1</td>
                <td><a href="?module=subject&action=edit&id=<?php echo $item['id'] ?>" class="btn btn-warning"><i
                            class="fa fa-edit"></i></a></td>
                <td><a href="?module=subject&action=delete&id=<?php echo $item['id'] ?>" class="btn btn-danger"
                        onclick="return confirm('Bạn có chắc chắn muốn xóa?')"><i class="fa fa-trash"></i></a></td>
            </tr>
            <?php endforeach;
            endif;
            ?>
        </tbody>
    </table>
</div>