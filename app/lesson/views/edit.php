<?php
$msg = getFlashData('msg');
$msg_type = getFlashData('msg_type');
$errors = getFlashData('errors');
$old = getFlashData('old');
if (empty($old) && !empty($data['lesson_detail'])) {
    $old = $data['lesson_detail'];
}
?>
<div class="container-fluid">
    <a href="?module=lesson&action=lists"><button class="btn btn-warning btn-sm">Quay lai</button></a>
    <hr>
    <h4>Cập nhật bài học: <b><?php echo !empty($old['title']) ? $old['title'] : false ?></b></h4>
    <?php getMsg($msg, $msg_type) ?>
    <form action="" method="post">
        <div class="row">
            <div class="col-6">
                <label for="">Tiêu đề bài học</label>
                <input type="text" class="form-control" placeholder="Tiêu đề bài học..." name="title"
                    value="<?php echo oldData('title', $old) ?>">
                <p class="error"><?php echo errorData('title', $errors) ?></p>
            </div>
            <div class="col-6">
                <label for="">Chương học</label>
                <select name="module_id" class="form-control">
                    <option value="0">Chọn chương học của bài giảng</option>
                    <?php if (!empty($data['module'])) :
                        foreach ($data['module'] as $key => $item) :
                    ?>
                    <option value="<?php echo $item['id'] ?>"
                        <?php echo (oldData('module_id', $old) == $item['id']) ? 'selected' : false ?>>
                        <?php echo $item['title'] ?></option>
                    <?php endforeach;
                    endif; ?>
                </select>
                <p class="error"><?php echo errorData('module_id', $errors) ?></p>
            </div>
            <div class="col-12">
                <label for="">Link video</label>
                <input type="text" class="form-control" placeholder="Đường dẫn video (embed)...." name="video_url"
                    value="<?php echo oldData('video_url', $old) ?>">
                <p class="error"><?php echo errorData('video_url', $errors) ?></p>
            </div>
        </div>
        <input type="hidden" name="id" value="<?php echo !empty($data['id'])?$data['id']:false ?>">
        <button type="submit" class="btn btn-primary">Cập nhật</button>
    </form>
</div>