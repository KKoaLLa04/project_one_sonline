<div class="container-fluid">
    <a href="?module=news&action=add"><button class="btn btn-success">Thêm tin tức mới <i
                class="fa fa-plus"></i></button></a>
    <hr>
    <h4>Danh sách tin tức</h4>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th width="3%">STT</th>
                <th>Ảnh</th>
                <th>Tiêu đề</th>
                <th>Nội dung</th>
                <th width="5%">Sửa</th>
                <th width="5%">Xóa</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($data['news'])) :
                foreach ($data['news'] as $key => $item) : ?>
            <tr>
                <td><?php echo $key + 1 ?></td>
                <td><?php echo $item['thumbnail'] ?></td>
                <td><?php echo $item['title'] ?></td>
                <td><?php echo $item['content'] ?></td>
                <td><a href="?module=news&action=edit&id=<?php echo $item['id'] ?>"><button class="btn btn-warning"><i
                                class="fa fa-edit"></i></button></a></td>
                <td><a href="?module=news&action=delete&id=<?php echo $item['id'] ?>"
                        onclick="return confirm('Bạn có chắc chắn muốn xóa?')"><button class="btn btn-danger"><i
                                class="fa fa-trash"></i></button></a></td>
            </tr>
            <?php endforeach;
            endif; ?>
        </tbody>
    </table>
</div>