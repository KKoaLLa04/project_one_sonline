<?php
$msg = getFlashData('msg');
$msg_type = getFlashData('msg_type');
?>

<div class="container-fluid">

    <?php getMsg($msg, $msg_type); ?>
</div>