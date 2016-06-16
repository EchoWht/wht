<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form class="uploadIcon" method="post" action="" enctype="multipart/form-data">
   <div class="big-icon">
       <img src="/Public/images/icon/<?php echo ((isset($name) && ($name !== ""))?($name):'default'); ?>.jpg" alt="头像" class="img-rounded center-block">
   </div>
    <h2 class="center-block"><?php echo ($name); ?></h2>
    <fieldset>


        <div class="icon  center-block">
            <input type="file" name="file" id="file">
            <input type="text" id="myTest" value="<?php echo U('User/Index/uploadIcon');?>">
        </div>

        <p class="center-block" id="uploadIconInfo">
            选择将要上传的头像，目前支持jpg gif png 三种格式，图片不能超过200kb
        </p>
        <div>
            <button class="icon-btn btn btn-primary btn-block center-block" id="uploadIconButton">上传</button>
        </div>


    </fieldset>
</form>


</body>
</html>