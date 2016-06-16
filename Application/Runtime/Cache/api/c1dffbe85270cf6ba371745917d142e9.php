<?php if (!defined('THINK_PATH')) exit();?><h3 class="main_title">
    <?php echo ($notemsg); ?>
</h3>
<div class="sub_title">
    <a href="http://blskye.com/index.php" target="_blank">
        查看已保存
    </a>|
    <a href="">
        移除该链接
    </a>
</div>
<div>
</div>
<a href="<?php echo ($note['noteurl']); ?>" id="saveUrl" target="_blank">
    <?php echo ($note['notetitle']); ?>
</a>