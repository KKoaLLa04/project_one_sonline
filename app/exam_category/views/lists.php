<div class="container-fluid">
    <a href="?module=exam_category&action=add"><button class="btn btn-success">Thêm danh mục đề thi mới <i
                class="fa fa-plus"></i></button></a>
    <hr>
    <h4>Danh mục đề thi</h4>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>STT</th>
                <th>Tên danh mục</th>
                <th>Tạo bởi (update..)</th>
                <th width="5%">Sửa</th>
                <th width="5%">Xóa</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($data['exam_cate'])) :
                foreach ($data['exam_cate'] as $key => $item) : ?>
            <tr>
                <td><?php echo $key + 1 ?></td>
                <td><?php echo $item['name'] ?></td>
                <td>1</td>
                <td><a href="#"><button class="btn btn-warning"><i class="fa fa-edit"></i></button></a></td>
                <td><a href="#"><button class="btn btn-danger"><i class="fa fa-trash"></i></button></a></td>
            </tr>
            <?php endforeach;
            endif ?>
        </tbody>
    </table>
</div>