<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <style>

    </style>
    <link rel="stylesheet" href="/Public/css/default/style.css"/>
    <link rel="stylesheet" href="/Public/highlight/styles/zenburn.css">
    <!--阅读显示页面样式-->
    <script src="/Public/highlight/highlight.pack.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>
</head>
<body>
		<!-- Fixed navbar -->
		<nav class="navbar navbar-fixed-top">
			<div class="rainbow-wapper">
				<div class="rainbow rainbow1"></div>
				<div class="rainbow rainbow2"></div>
				<div class="rainbow rainbow3"></div>
				<div class="rainbow rainbow4"></div>
			</div>
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="">
						<img alt="Brand" class="logo" src="/Public/images/logo-z.png" />
					</a>
					<a class="navbar-brand" href="#">NoteBlog</a>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<!--<li class="active"><a href="#">Home</a></li>-->
						<li><a href="<?php echo U('/Note/Index/index');?>">Note</a></li>
						<li><a href="<?php echo U('/Blog/Index/index');?>">Blog</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">大厅 <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li role="separator" class="divider"></li>
								<li class="dropdown-header">Nav header</li>
								<li><a href="#">Separated link</a></li>
								<li><a href="#">One more separated link</a></li>
							</ul>
						</li>
					</ul>

					<ul class="nav navbar-nav navbar-right">
						
						<li>
							<form class="navbar-form navbar-right">
								<input type="text" class="form-control" placeholder="Search...">
							</form>
						</li>
						<li>
							<a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-plus"></span></a>
						</li>
						<!--<a class="navbar-brand" href="#">-->
							<!--<img alt="Brand" class="head-icon" src="/Public/images/icon/<?php echo ($name); ?>.jpg">-->
						<!--</a>-->

						<li class="dropdown">
							<a href="#" class="dropdown-toggle navbar-brand" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
								<img class="head-icon" src="/Public/images/icon/<?php echo ($name); ?>.jpg"/>
							</a>
							<!--<div class="navbar-header">-->
								<!--<a class="navbar-brand" href="#">-->
									<!--<img alt="Brand" class="head-icon" src="/Public/images/icon/<?php echo ($name); ?>.jpg">-->
								<!--</a>-->
							<!--</div>-->
							<ul class="dropdown-menu">
								<li><a href="<?php echo U('/User/Index/index');?>">查看个人资料</a></li>
								<li><a href="<?php echo U('/User/Index/signout');?>">退出</a></li>
							</ul>
						</li>
					</ul>
				</div>

				<!--/.nav-collapse -->
			</div>

		</nav>
<article>
    <div>
        <a href="<?php echo ($add); ?>">写Blog</a>
    </div>
    <?php if(is_array($myblog)): $i = 0; $__LIST__ = $myblog;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="simple-art">
            <div class="simple-art-head">
                <h2><?php echo ($vo["arttitle"]); ?></h2>
                <h5><?php echo ($vo["username"]); ?> <em><?php echo ($vo["artdate"]); ?></em></h5>
                <hr/>
            </div>
           <div class="simple-art-body">
               <p>
                   <?php echo ($vo["artcontent"]); ?>
               </p>
           </div>
            <hr/>
            <div class="simple-art-foot">
                <a href="<?php echo ($readmore); ?>?artid=<?php echo ($vo["artid"]); ?>">阅读更多</a>
            </div>
        </div><?php endforeach; endif; else: echo "" ;endif; ?>

</article>
</body>
</html>