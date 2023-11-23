<p class="py-1">Trang chủ > Sách</p>

<?php if (!empty($data['book_category'])) :
    foreach ($data['book_category'] as $key => $item) : ?>
<hr>
<div class="title__text reset my-4">
    <h4 class="text-left reset"><?php echo $item['title'] ?></h4>
    <a href="#"><button class="title__button">Xem tất cả >></button></a>
</div>
<div class="textbook">
    <?php if (!empty($data['book'])) :
                foreach ($data['book'] as $count => $value) :
            ?>
    <?php
                    if ($value['book_id'] == $item['id']) : ?>
    <div class="textbook__content">
        <a href="?module=book&action=detail&id=<?= $value['id'] ?>"><img
                src="<?php echo _WEB_HOST_ROOT . '/uploads/' . $value['thumbnail'] ?>" alt="" width="100%"></a>
        <div class="course__padding">
            <a href="?module=book&action=detail&id=<?= $value['id'] ?>">
                <p><b><?php echo $value['name'] ?></b></p>
            </a>
            <div class="textbook__item">
                <p>Giá bán:</p>
                <b><?php echo $value['price'] ?> đ</b>
            </div>
        </div>
    </div>
    <?php endif;
                    ?>
    <?php
                endforeach;
            endif ?>
</div>
<?php endforeach;
endif;