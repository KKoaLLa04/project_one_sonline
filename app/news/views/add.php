<?php
$msg = getFlashData('msg');
$msg_type = getFlashData('msg_type');
$errors = getFlashData('errors');
$old = getFlashData('old');
?>
<div class="container-fluid">
    <a href="?module=news&action=lists"><button class="btn btn-warning">Quay lai</button></a>
    <hr>
    <h4>Thêm tin tức mới</h4>
    <?php getMsg($msg, $msg_type) ?>
    <form action="" method="post">
        <div class="row">
            <div class="col-6">
                <label for="">Tiêu đề tin tức</label>
                <input type="text" class="form-control" placeholder="Tiêu đề tin tức..." name="title" value="<?php echo oldData('title', $old) ?>">
                <p class="error"><?php echo errorData('title', $errors) ?></p>
            </div>

            <div class="col-6">
                <label for="">Ảnh</label>
                <input type="file" class="form-control" name="thumbnail">
                <p></p>
            </div>

            <div class="col-12">
                <label for="">Nội dung</label>
                <textarea cols="30" rows="10" name="content" class="form-control" placeholder="Nội dung tin tức...."><?php echo oldData('content', $old) ?></textarea>
                <p class="error"><?php echo errorData('content', $errors) ?></p>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Thêm mới</button>
    </form>
</div>