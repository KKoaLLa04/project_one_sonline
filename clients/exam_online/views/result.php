<p class="py-3">Trang chủ > kết quả</p>

<div class="background_white text-center">
    <div class="row">
        <div class="col-6">
            <?php if (!empty($data['result'])) :
                $item = $data['result'];
            ?>
            <h4>Kết quả bài thi của bạn:</h4>
            <h4>Học viên: <?php echo $item['student_name'] ?></h4>
            <p>Bài thi - <?php echo $item['test_title'] ?></p>
            <p>Thời gian thi: 60 phút</p>
            <p>Số câu hỏi: 40</p>
            <h1>Kết quả: <b style="color: red;"><?php echo $item['score'] ?>/10 đ</b></h1>
            <?php endif; ?>
        </div>

        <div class="col-6">
            <img src="<?php echo _WEB_HOST_ROOT ?>/uploads/result.jpg" alt="" width="100%">
        </div>
    </div>
</div>