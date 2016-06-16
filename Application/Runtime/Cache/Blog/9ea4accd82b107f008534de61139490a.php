<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="/Public/css/default/style.css"/>
    <link rel="stylesheet" href="/Public/highlight/styles/zenburn.css">
    <link rel="stylesheet" type="text/css" href="/Public/css/tip.css" />
    <!--阅读显示页面样式-->
    <script src="/Public/highlight/highlight.pack.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>
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
    <div class="simple-art">
       <div class="simple-art-head">
           <h2><?php echo ($myblog[0][arttitle]); ?></h2>
           <h5><?php echo ($myblog[0][username]); ?><em><?php echo ($myblog[0][artdate]); ?></em></h5>
       </div>
        <hr/>
       <div class="simple-art-body">
           <p>
               <?php echo ($myblog[0][artcontent]); ?>
           </p>
       </div>
        <hr/>
       <div class="simple-art-foot">
           <span><?php echo ($myblog[0][artremark1]); ?></span>
           <br>
           <a href="<?php echo U('/Blog/Index/edit');?>?artid=<?php echo ($myblog[0][artid]); ?>">修改</a>
           <a href="javascript:void(0);" onclick="deleteBlog(<?php echo ($myblog[0][artid]); ?>)">删除</a>
       </div>
    </div>
</article>
<div id="mask" onclick="notipmain()">
</div>
<div id="maintip">
	<div class="maintip-title">
		<button class="close" type="button" onClick="notipmain()">
			×
		</button>
	</div>
	<div class="maintip-body" id="info">
		
	</div>
	<div class="maintip-foot" id="maintip-foot">
		<button class="btn  btn-success" type="button" id="tipok">
			
		</button>
		<button class="btn  btn-success" type="button" id="tipcancel" onClick="notipmain()">
			
		</button>
	</div>
</div>
<script src="/Public/bootstrap/js/jquery.min.js"></script>
<script src="/Public/js/func.js"></script>
</body>
</html>