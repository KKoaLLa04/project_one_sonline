<p class="py-3">Trang chủ > Khóa học</p>

<div>
    <?php if (!empty($data['course_category'])) :
        foreach ($data['course_category'] as $key => $value) :
    ?>
    <div class="title__text">
        <h4 class="text-left reset"><?php echo $value['title'] ?></h4>
        <a href="#"><button class="title__button">Xem tất cả >></button></a>
    </div>

    <div class="course">
        <?php if (!empty($data['course_detail'][$key])) :
                    foreach ($data['course_detail'][$key] as $item) : ?>
        <div class="course__content">
            <a href="?module=course&action=detail&course_id=<?php echo $item['id'] ?>"> <img
                    src="<?php echo _WEB_HOST_TEMPLATE ?>/images/course1.jpg" alt=""></a>
            <div class="course__padding">
                <a href="?module=course&action=detail&course_id=<?php echo $item['id'] ?>">
                    <p><b><?php echo $item['title'] ?></b></p>
                </a>
                <p><b><?php echo $value['title'] ?></b></p>
                <div class="course__item">
                    <p>Học phí:</p>
                    <b class="course__price"><?php echo $item['price'] ?> VNĐ</b>
                </div>
                <h6>Người Đứng Lớp: <b><?php echo $item['fullname'] ?></b></h6>
            </div>
        </div>
        <?php endforeach;
                else : ?>
        <p>Chưa có khóa học nào của danh mục này</p>
        <?php
                endif; ?>
    </div>
    <?php endforeach;
    endif; ?>
</div>
<!-- <div class="title__text">
    <h4 class="text-left reset">KHÓA HỌC 0 ĐỒNG</h4>
    <a href="#"><button class="title__button">Xem tất cả >></button></a>
</div>

<div class="course">
    <div class="course__content">
        <img src="<?php echo _WEB_HOST_TEMPLATE ?>/images/course1.jpg" alt="">
        <div class="course__padding">
            <p><b>Định lý BHD - định lý thống nhất</b></p>
            <p><b>Khóa học 0 đồng</b></p>
            <div class="course__item">
                <p>Học phí:</p>
                <b>Miễn phí</b>
            </div>
            <h6>GIẢNG VIÊN: TS.CNTT DUY KIÊN</h6>
        </div>
    </div> -->

<!-- <div class="course__content">
        <img src="<?php echo _WEB_HOST_TEMPLATE ?>/images/course2.jpg" alt="">
        <div class="course__padding">
            <p><b>Định lý BHD - định lý thống nhất</b></p>
            <p><b>Khóa học 0 đồng</b></p>
            <div class="course__item">
                <p>Học phí:</p>
                <b>Miễn phí</b>
            </div>
            <h6>GIẢNG VIÊN: TS.CNTT DUY KIÊN</h6>
        </div>
    </div>

    <div class="course__content">
        <img src="<?php echo _WEB_HOST_TEMPLATE ?>/images/course3.jpg" alt="">
        <div class="course__padding">
            <p><b>Định lý BHD - định lý thống nhất</b></p>
            <p><b>Khóa học 0 đồng</b></p>
            <div class="course__item">
                <p>Học phí:</p>
                <b>Miễn phí</b>
            </div>
            <h6>GIẢNG VIÊN: TS.CNTT DUY KIÊN</h6>
        </div>
    </div>

    <div class="course__content">
        <img src="<?php echo _WEB_HOST_TEMPLATE ?>/images/course4.jpg" alt="">
        <div class="course__padding">
            <p><b>Định lý BHD - định lý thống nhất</b></p>
            <p><b>Khóa học 0 đồng</b></p>
            <div class="course__item">
                <p>Học phí:</p>
                <b>Miễn phí</b>
            </div>
            <h6>GIẢNG VIÊN: TS.CNTT DUY KIÊN</h6>
        </div>
    </div> -->
</div>

<!-- <div class="title__text">
    <h4 class="text-left reset">LUYỆN THI THPTQG 2024</h4>
    <a href="#"><button class="title__button">Xem tất cả >></button></a>
</div>

<div class="training">
    <div class="training__content">
        <img src="<?php echo _WEB_HOST_TEMPLATE ?>/images/training1.jpg" alt="">
        <div class="course__padding">
            <p><b>Định lý BHD - định lý thống nhất</b></p>
            <p><b>Khóa học 0 đồng</b></p>
            <div class="training__item">
                <p>Học phí:</p>
                <b>Miễn phí</b>
            </div>
            <h6>GIẢNG VIÊN: TS.CNTT DUY KIÊN</h6>
        </div>
    </div>

    <div class="training__content">
        <img src="<?php echo _WEB_HOST_TEMPLATE ?>/images/training2.jpg" alt="">
        <div class="course__padding">
            <p><b>Định lý BHD - định lý thống nhất</b></p>
            <p><b>Khóa học 0 đồng</b></p>
            <div class="training__item">
                <p>Học phí:</p>
                <b>Miễn phí</b>
            </div>
            <h6>GIẢNG VIÊN: TS.CNTT DUY KIÊN</h6>
        </div>
    </div>

    <div class="training__content">
        <img src="<?php echo _WEB_HOST_TEMPLATE ?>/images/training3.jpg" alt="">
        <div class="course__padding">
            <p><b>Định lý BHD - định lý thống nhất</b></p>
            <p><b>Khóa học 0 đồng</b></p>
            <div class="training__item">
                <p>Học phí:</p>
                <b>Miễn phí</b>
            </div>
            <h6>GIẢNG VIÊN: TS.CNTT DUY KIÊN</h6>
        </div>
    </div>

    <div class="training__content">
        <img src="<?php echo _WEB_HOST_TEMPLATE ?>/images/training4.jpg" alt="">
        <div class="course__padding">
            <p><b>Định lý BHD - định lý thống nhất</b></p>
            <p><b>Khóa học 0 đồng</b></p>
            <div class="training__item">
                <p>Học phí:</p>
                <b>Miễn phí</b>
            </div>
            <h6>GIẢNG VIÊN: TS.CNTT DUY KIÊN</h6>
        </div>
    </div>
</div>

<br>

<div class="training">
    <div class="training__content">
        <img src="<?php echo _WEB_HOST_TEMPLATE ?>/images/training1.jpg" alt="">
        <div class="course__padding">
            <p><b>Định lý BHD - định lý thống nhất</b></p>
            <p><b>Khóa học 0 đồng</b></p>
            <div class="training__item">
                <p>Học phí:</p>
                <b>Miễn phí</b>
            </div>
            <h6>GIẢNG VIÊN: TS.CNTT DUY KIÊN</h6>
        </div>
    </div>

    <div class="training__content">
        <img src="<?php echo _WEB_HOST_TEMPLATE ?>/images/training2.jpg" alt="">
        <div class="course__padding">
            <p><b>Định lý BHD - định lý thống nhất</b></p>
            <p><b>Khóa học 0 đồng</b></p>
            <div class="training__item">
                <p>Học phí:</p>
                <b>Miễn phí</b>
            </div>
            <h6>GIẢNG VIÊN: TS.CNTT DUY KIÊN</h6>
        </div>
    </div>

    <div class="training__content">
        <img src="<?php echo _WEB_HOST_TEMPLATE ?>/images/training3.jpg" alt="">
        <div class="course__padding">
            <p><b>Định lý BHD - định lý thống nhất</b></p>
            <p><b>Khóa học 0 đồng</b></p>
            <div class="training__item">
                <p>Học phí:</p>
                <b>Miễn phí</b>
            </div>
            <h6>GIẢNG VIÊN: TS.CNTT DUY KIÊN</h6>
        </div>
    </div>

    <div class="training__content">
        <img src="<?php echo _WEB_HOST_TEMPLATE ?>/images/training4.jpg" alt="">
        <div class="course__padding">
            <p><b>Định lý BHD - định lý thống nhất</b></p>
            <p><b>Khóa học 0 đồng</b></p>
            <div class="training__item">
                <p>Học phí:</p>
                <b>Miễn phí</b>
            </div>
            <h6>GIẢNG VIÊN: TS.CNTT DUY KIÊN</h6>
        </div>
    </div>
</div>

<div class="title__text">
    <h4 class="text-left reset">GÓI LUYỆN THI PRO</h4>
    <a href="#"><button class="title__button">Xem tất cả >></button></a>
</div>

<div class="test">
    <div class="test__content">
        <img src="<?php echo _WEB_HOST_TEMPLATE ?>/images/test1.jpg" alt="">
        <div class="course__padding">
            <p><b>Định lý BHD - định lý thống nhất</b></p>
            <p><b>Khóa học 0 đồng</b></p>
            <div class="test__item">
                <p>Học phí:</p>
                <b>Miễn phí</b>
            </div>
            <h6>GIẢNG VIÊN: TS.CNTT DUY KIÊN</h6>
        </div>
    </div>

    <div class="test__content">
        <img src="<?php echo _WEB_HOST_TEMPLATE ?>/images/test2.jpg" alt="">
        <div class="course__padding">
            <p><b>Định lý BHD - định lý thống nhất</b></p>
            <p><b>Khóa học 0 đồng</b></p>
            <div class="test__item">
                <p>Học phí:</p>
                <b>Miễn phí</b>
            </div>
            <h6>GIẢNG VIÊN: TS.CNTT DUY KIÊN</h6>
        </div>
    </div>

    <div class="test__content">
        <img src="<?php echo _WEB_HOST_TEMPLATE ?>/images/test3.jpg" alt="">
        <div class="course__padding">
            <p><b>Định lý BHD - định lý thống nhất</b></p>
            <p><b>Khóa học 0 đồng</b></p>
            <div class="test__item">
                <p>Học phí:</p>
                <b>Miễn phí</b>
            </div>
            <h6>GIẢNG VIÊN: TS.CNTT DUY KIÊN</h6>
        </div>
    </div>

    <div class="test__content">
        <img src="<?php echo _WEB_HOST_TEMPLATE ?>/images/test4.jpg" alt="">
        <div class="course__padding">
            <p><b>Định lý BHD - định lý thống nhất</b></p>
            <p><b>Khóa học 0 đồng</b></p>
            <div class="test__item">
                <p>Học phí:</p>
                <b>Miễn phí</b>
            </div>
            <h6>GIẢNG VIÊN: TS.CNTT DUY KIÊN</h6>
        </div>
    </div>
</div>

<div class="title__text">
    <h4 class="text-left reset">GÓI LUYỆN THI GIÁO VIÊN THAM KHẢO</h4>
    <a href="#"><button class="title__button">Xem tất cả >></button></a>
</div>

<div class="refer">
    <div class="refer__content">
        <img src="<?php echo _WEB_HOST_TEMPLATE ?>/images/refer1.jpg" alt="">
        <div class="course__padding">
            <p><b>Định lý BHD - định lý thống nhất</b></p>
            <p><b>Khóa học 0 đồng</b></p>
            <div class="refer__item">
                <p>Học phí:</p>
                <b>Miễn phí</b>
            </div>
            <h6>GIẢNG VIÊN: TS.CNTT DUY KIÊN</h6>
        </div>
    </div>

    <div class="refer__content">
        <img src="<?php echo _WEB_HOST_TEMPLATE ?>/images/refer2.jpg" alt="">
        <div class="course__padding">
            <p><b>Định lý BHD - định lý thống nhất</b></p>
            <p><b>Khóa học 0 đồng</b></p>
            <div class="refer__item">
                <p>Học phí:</p>
                <b>Miễn phí</b>
            </div>
            <h6>GIẢNG VIÊN: TS.CNTT DUY KIÊN</h6>
        </div>
    </div>

    <div class="refer__content">
        <img src="<?php echo _WEB_HOST_TEMPLATE ?>/images/refer3.jpg" alt="">
        <div class="course__padding">
            <p><b>Định lý BHD - định lý thống nhất</b></p>
            <p><b>Khóa học 0 đồng</b></p>
            <div class="refer__item">
                <p>Học phí:</p>
                <b>Miễn phí</b>
            </div>
            <h6>GIẢNG VIÊN: TS.CNTT DUY KIÊN</h6>
        </div>
    </div>

    <div class="refer__content">
        <img src="<?php echo _WEB_HOST_TEMPLATE ?>/images/refer4.jpg" alt="">
        <div class="course__padding">
            <p><b>Định lý BHD - định lý thống nhất</b></p>
            <p><b>Khóa học 0 đồng</b></p>
            <div class="refer__item">
                <p>Học phí:</p>
                <b>Miễn phí</b>
            </div>
            <h6>GIẢNG VIÊN: TS.CNTT DUY KIÊN</h6>
        </div>
    </div>
</div> -->