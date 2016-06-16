<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>


    <script src="/Public/ckeditor/ckeditor.js"></script>
    <link rel="stylesheet" href="/Public/highlight/styles/zenburn.css">

    <script src="/Public/highlight/highlight.pack.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>
    <link rel="stylesheet" href="/Public/css/default/style.css"/>

    <!--阅读显示页面样式-->


</head>
<body>
<nav>
    <ul>
        <li class="ico"><a href="<?php echo U('/Home/Index/index');?>"><img src="/Public/images/logo.png"></a></li>
        <li><a href="<?php echo U('/Home/Index/index');?>"><?php echo ($name); ?></a></li>
        <li><a href="<?php echo U('/Home/Index/index');?>">首页</a></li>
        <li><a href="<?php echo U('/Blog/Index/index');?>">Blog</a></li>
        <li><a href="<?php echo U('/Note/Index/index');?>">Note</a></li>
        <li><a href="<?php echo U('/Home/Index/index');?>">Other</a></li>
    </ul>
</nav>


<article>
    <form action="<?php echo U('/Blog/Index/updateBlog');?>" method="post">
    <div class="simple-art">
        <div class="simple-art-head">
            <input type="hidden" value="<?php echo ($myblog[0][artid]); ?>">
            <input type="text" value="<?php echo ($myblog[0][arttitle]); ?>">
            <h5><?php echo ($myblog[0][username]); ?><em><?php echo ($myblog[0][artdate]); ?></em></h5>
            <select name="classification" id="classification">
                <option>
                    web前端
                </option>
                <option>
                    Java
                </option>
                <option>
                    PHP
                </option>
                <option>
                    SQL
                </option>
                <option>
                    文学
                </option>
                <option>
                    历史
                </option>
                <option>
                    其他
                </option>
            </select>
        </div>
        <hr/>
        <div class="simple-art-body">

            <textarea rows="30" cols="50" name="artcontent"><?php echo ($myblog[0][artcontent]); ?></textarea>
            <script type="text/javascript">CKEDITOR.replace('artcontent');</script>
        </div>
        <hr/>
        <div class="simple-art-foot">
            <span><?php echo ($myblog[0][artremark1]); ?></span>
            <br>
            <button type="submit">确定</button>
        </div>
    </div>
</article>

</body>
</html>