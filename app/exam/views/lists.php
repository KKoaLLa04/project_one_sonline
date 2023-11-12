<div class="container-fluid">
    <a href="?module=exam&action=add"><button class="btn btn-success">Thêm đề thi mới <i
                class="fa fa-plus"></i></button></a>
    <hr>
    <h4>Danh sách đề thi</h4>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th width="3%">STT</th>
                <th>Tiêu đề</th>
                <th>Mô tả ngắn</th>
                <th>Danh mục</th>
                <th width="10%">Chi Tiết</th>
                <th width="5%">Sửa</th>
                <th width="5%">Xóa</th>
            </tr>
        </thead>

        <tbody>
            <?php if (!empty($data['exam'])) :
                foreach ($data['exam'] as $key => $item) : ?>
            <tr>
                <td><?php echo $key + 1 ?></td>
                <td><?php echo $item['title'] ?></td>
                <td><?php echo $item['description'] ?></td>
                <td><?php echo $item['name'] ?></td>
                <td><a href="#" target="_blank"><button class="btn btn-primary">Xem chi tiết</button></a></td>
                <td><a href="#"><button class="btn btn-warning"><i class="fa fa-edit"></i></button></a></td>
                <td><a href="#"><button class="btn btn-danger"><i class="fa fa-trash"></i></button></a></td>
            </tr>
            <?php endforeach;
            endif; ?>
        </tbody>
    </table>
</div>