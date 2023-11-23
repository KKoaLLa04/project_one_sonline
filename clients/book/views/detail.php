<?php
$msg = getFlashData('msg');
$msg_type = getFlashData('msg_type');
if (!empty($data['book_detail'])) {
    $item = $data['book_detail'];
}
?>
<p class="py-1">Trang chủ > Sách luyện thi....</p>

<div class="row py-3">
    <?php getMsg($msg, $msg_type) ?>
    <div class="col-3">
        <img src="<?php echo _WEB_HOST_TEMPLATE ?>/images/book5.png" alt="" width="100%">
    </div>

    <div class="col-6">
        <h3>Trọn Bộ Kinh Nghiệm Luyện Thi Vật Lí 12</h3>
        <hr>
        <div>
            <p><i class="fa fa-check-circle"></i> Còn hàng</p>
            <p>Chia sẻ: <button class="btn btn-info btn-sm"><i class="fab fa-facebook"></i> Share</button> <button class="btn btn-dark btn-sm"><i class="fab fa-twitter"></i> Twitter</button></p>
        </div>
        <hr>
        <p>Bộ BÍ QUYẾT LUYỆN THI VẬT LÍ 12 đã từng được bình chọn là hay nhất trong tất cả các sách tham khảo tại thời
            điểm phát hành và được các giáo viên sử dụng làm bộ sách tham khảo chính, đồng thời áp dụng đại trà ở nhiều
            trung tâm luyện thi và các trường THPT nhiều năm nay Bộ BÍ QUYẾT LUYỆN THI VẬT LÍ 12 đã từng được bình chọn
            là hay nhất trong tất cả các sách tham khảo tại thời
            điểm phát hành và được các giáo viên sử dụng làm bộ sách tham khảo chính, đồng thời áp dụng đại trà ở nhiều
            trung tâm luyện thi và các trường THPT nhiều năm nay...</p>
        <p>Tác giả: <b>Duy Kiên</b></p>
        <p>
            <a href="#"><button class="btn btn-danger">Mua ngay <i class="fa-solid fa-sack-dollar"></i></button></a>
            <a href="?module=book&action=add&book_id=<?= $item['id'] ?>"><button class="btn btn-success">Thêm vào giỏ
                    hàng <i class="fa fa-cart-plus"></i></button></a>
        </p>
        <hr>
        <p>Khuyến mãi</p>
        <p><b>Miễn phí giao hàng toàn quốc (Khi mua cùng khóa học)</b></p>
    </div>

    <div class="col-3">
        <div class="background_white">
            <h4>Thông tin thanh toán</h4>
            <hr>
            <p>Giá bìa: 600.000đ</p>
            <p>Giá bán: <b>600.000đ</b></p>
            <hr>
            <div class="d-flex justify-content-around">
                <p>Số lượng mua</p>
                <p><button class="btn btn-primary btn-sm"><i class="fa fa-minus"></i></button><button class="btn btn-light btn-sm">1</button><button class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></button></p>
            </div>
            <hr>
            <button class="btn btn-danger w-100 py-3"><i class="fa fa-cart-arrow-down"></i> Mua ngay</button>
        </div>

        <div class="d-flex py-3">
            <img src="<?php echo _WEB_HOST_TEMPLATE ?>/images/phone.svg" width="15%">
            <div class="mx-2">
                <span>Mua hàng online</span><br>
                <span><b>0985 82 93 93 - 0943 19 19 00</b></span>
            </div>
        </div>

        <div class="d-flex py-3">
            <img src="<?php echo _WEB_HOST_TEMPLATE ?>/images/truck.svg" width="15%">
            <div class="mx-2">
                <span>Vận chuyển</span><br>
                <span><b>GIAO HÀNG TRÊN TOÀN QUỐC</b></span>
            </div>
        </div>
    </div>
</div>

<hr>
<?php echo (!empty($item['content'])) ? html_entity_decode($item['content']) : false ?>

<div class="row">
    <div class="col-3 background_white">
        <img src="<?php echo _WEB_HOST_TEMPLATE ?>/images/book1.png" alt="" width="100%">
        <h6 class="py-3">Kinh nghiệm luyện thi</h6>
        <div class="d-flex justify-content-between">
            <p>Giá bán: </p>
            <p>600.000đ</p>
        </div>
    </div>

    <div class="col-3 background_white">
        <img src="<?php echo _WEB_HOST_TEMPLATE ?>/images/book1.png" alt="" width="100%">
        <h6 class="py-3">Kinh nghiệm luyện thi</h6>
        <div class="d-flex justify-content-between">
            <p>Giá bán: </p>
            <p>600.000đ</p>
        </div>
    </div>

    <div class="col-3 background_white">
        <img src="<?php echo _WEB_HOST_TEMPLATE ?>/images/book1.png" alt="" width="100%">
        <h6 class="py-3">Kinh nghiệm luyện thi</h6>
        <div class="d-flex justify-content-between">
            <p>Giá bán: </p>
            <p>600.000đ</p>
        </div>
    </div>

    <div class="col-3 background_white">
        <img src="<?php echo _WEB_HOST_TEMPLATE ?>/images/book1.png" alt="" width="100%">
        <h6 class="py-3">Kinh nghiệm luyện thi</h6>
        <div class="d-flex justify-content-between">
            <p>Giá bán: </p>
            <p>600.000đ</p>
        </div>
    </div>
</div>