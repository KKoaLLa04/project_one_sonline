<?php
$msg = getFlashData('msg');
$msg_type = getFlashData("msg_type");
$errors = getFlashData('errors');
$old = getFlashData('old');
?>
<div class="container-fluid">
    <a href="?module=news_category&action=lists"><button class="btn btn-warning">Quay lại</button></a>
    <hr>
    <h4>Thêm danh mục tin tức mới</h4>
    <?php getMsg($msg, $msg_type) ?>
    <form action="" method="post">
        <div class="form-group">
            <label for="">Tiêu đề</label>
            <input type="text" class="form-control" placeholder="Tiêu đề danh mục tin tức..." name="title"
                value="<?php echo oldData('title', $old) ?>">
            <p class="error"><?php echo errorData('title', $errors) ?></p>
        </div>

        <button type="submit" class="btn btn-primary">Thêm mới</button>
    </form>
</div>