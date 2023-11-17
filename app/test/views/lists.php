<?php
$msg = getFlashData('msg');
$msg_type = getFlashData('msg_type');
?>
<div class="container-fluid">
    <a href="?module=test&action=add"><button class="btn btn-success">Thêm mới <i class="fa fa-plus"></i></button></a>
    <hr>
    <h4>Danh sách thi online (Quản lý câu hỏi + đáp án)</h4>
    <?php getMsg($msg, $msg_type) ?>
    <table class="table table-bordered">
        <thead>
            <tr class="table-info">
                <th>STT</th>
                <th>Tiêu đề</th>
                <th>danh mục</th>
                <th width="5%">Sửa</th>
                <th width="5%">Xóa</th>
            </tr>
        </thead>

        <tbody>
            <?php if (!empty($data['test'])) :
                foreach ($data['test'] as $key => $item) : ?>
                    <tr>
                        <td><?php echo $key + 1 ?></td>
                        <td><a href="?module=test&action=edit&id=<?php echo $item['id'] ?>"><?php echo $item['title'] ?></a>
                        </td>
                        <td><?php echo $item['test_id'] ?></td>
                        <td><a href="?module=test&action=edit&id=<?php echo $item['id'] ?>"><button class="btn btn-warning"><i class="fa fa-edit"></i></button></a></td>
                        <td><a href="?module=test&action=delete&id=<?php echo $item['id'] ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa?')"><button class="btn btn-danger"><i class="fa fa-trash"></i></button></a></td>
                    </tr>
            <?php endforeach;
            endif; ?>
        </tbody>
    </table>
</div>