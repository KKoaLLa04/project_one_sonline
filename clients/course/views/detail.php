<p class="py-3">Trang chủ > Khóa học > Khóa học 0 đồng > lập trình cơ bản</p>

<div class="row">
    <div class="col-8">
        <iframe width="100%" height="500px" src="<?php echo !empty($data['video_url']) ? $data['video_url'] : 'https://www.youtube.com/embed/wZvoZuc0Hr4?si=2To-UTY6KlpvVbLy' ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen class="mb-3"></iframe>
        <b>Người Đứng Lớp: Duy Kiên</b>
        <p></p>
        <b>Facebook: <a href="#">Bấm vào đây</a></b>

        <h3 class="mt-5">Nội dung khóa học</h3>

        <?php if (!empty($data['module'])) :
            foreach ($data['module'] as $key => $value) : ?>
                <div class="dropdown">
                    <div class="alert alert-secondary">
                        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0 profile">
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <?php echo $value['title'] ?>
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <?php if (!empty($data['course_detail'][$key])) :
                                                foreach ($data['course_detail'][$key] as $key => $item) : ?>
                                                    <li><a class="dropdown-item" href="?module=course&action=detail&course_id=<?php echo !empty($data['course_id']) ? $data['course_id'] : false ?>&video_url=<?php echo $item['video_url'] ?>"><?php echo $item['title'] ?></a>
                                                    </li>
                                            <?php endforeach;
                                            endif; ?>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
        <?php endforeach;
        endif; ?>
    </div>

    <div class="col-4">
        <h5>lập trình cơ bản</h5>

        <div class="course__item">
            <p>Giá:</p>
            <h2 style="color: red;">Miễn phí</h2>
        </div>
        <hr>
        <button class="btn btn-primary form-control py-3">Miễn phí</button>
        <div class="course__description py-3">
            <p><img src="<?php echo _WEB_HOST_TEMPLATE ?>/images/svg/chap.svg" alt="">Chương: 1 chương</p>
            <p><img src="<?php echo _WEB_HOST_TEMPLATE ?>/images/svg/clock.svg" alt="">Giáo trình: 59+ video bài giảng
            </p>
            <p><img src="<?php echo _WEB_HOST_TEMPLATE ?>/images/svg/play.svg" alt="">Thời lượng: 9+ giờ học</p>
            <p><img src="<?php echo _WEB_HOST_TEMPLATE ?>/images/svg/khaigiang.svg" alt="">Ngày khai giảng: 01/01/2020
            </p>
            <p><img src="<?php echo _WEB_HOST_TEMPLATE ?>/images/svg/hsd.svg" alt="">Hạn sử dụng: 10/07/2030</p>
            <p><img src="<?php echo _WEB_HOST_TEMPLATE ?>/images/svg/chap.svg" alt="">Thời lượng: 9+ giờ học</p>
            <p><img src="<?php echo _WEB_HOST_TEMPLATE ?>/images/svg/clock.svg" alt="">Hệ thống bài giảng độc quyền của
                SONLINE</p>
        </div>
    </div>
</div>