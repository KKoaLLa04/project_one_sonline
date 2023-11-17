<?php
$item = $data['contact_detail'];
$msg = getFlashData('msg');
$msg_Type = getFlashData('msg_type');
$old = getFlashData('old');
?>
<div class="container-fluid">
    <a href="?module=contact&action=lists"><button class="btn btn-warning btn-sm">Quay lại</button></a>
    <hr>
    <h4>Lưu ý liên hệ khách hàng: <b><?php echo $item['fullname'] ?></b></h4>
    <p><b>Nội dung:</b> <?php echo $item['content'] ?></p>

    <form action="" method="post">
        <div class="form-group">
            <label for="">Lưu ý</label>
            <textarea name="note" class="form-control" placeholder="Lưu ý đối với liên hệ của khách hàng..." rows="10"><?php echo $item['note'] ?></textarea>
            <p></p>
        </div>

        <div class="form-group">
            <label for="">Trạng thái: </label>
            <select name="status">
                <option value="0" <?php echo ($item['status'] == 0) ? 'selected' : false ?>>Chưa duyệt</option>
                <option value="1" <?php echo ($item['status'] == 1) ? 'selected' : false ?>>Đã duyệt</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Đồng ý</button>
    </form>
</div>