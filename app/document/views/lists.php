<?php
$msg = getFlashData('msg');
$msg_type = getFlashData('msg_type');
?>
<div class="container-fluid">
    <a href="?module=document&action=add"><button class="btn btn-success">Thêm tài liệu mới <i class="fa fa-plus"></i></button></a>
    <hr>
    <h4>Danh sách tài liệu miễn phí</h4>
    <?php getMsg($msg, $msg_type) ?>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th width="3%">STT</th>
                <th>Tiêu đề</th>
                <th>Đường dẫn Đáp Án</th>
                <th width="10%">lượt xem</th>
                <th>danh mục</th>
                <th width="5%">Sửa</th>
                <th width="5%">Xóa</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($data['document'])) :
                foreach ($data['document'] as $key => $item) : ?>
                    <tr>
                        <td><?php echo $key + 1 ?></td>
                        <td><?php echo $item['title'] ?></td>
                        <td><?php echo $item['answers'] ?></td>
                        <td><button class="btn btn-primary btn-sm"><?php echo $item['view'] ?> lượt xem</button></td>
                        <td><a href="#"><?php echo $item['cate_name'] ?></a></td>
                        <td><a href="#"><button class="btn btn-warning"><i class="fa fa-edit"></i></button></a></td>
                        <td><a href="?module=document&action=delete&id=<?php echo $item['id'] ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa?')"><button class="btn btn-danger"><i class="fa fa-trash"></i></button></a></td>
                    </tr>
            <?php endforeach;
            endif; ?>
        </tbody>
    </table>
</div>