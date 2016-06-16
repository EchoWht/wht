<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en" class="no-js">

	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Polaroid Stack to Grid Intro Animation | Demo: Default | Codrops</title>
		<meta name="description" content="Demo of the tutorial on how to re-create a similar effect of the takeitapp.co website." />
		<meta name="keywords" content="responsive, grid, polaroid, animation, intro, web design, tutorial, responsive images, srcset" />

		<link href='http://fonts.useso.com/css?family=Caveat:400,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="/Public/bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="/Public/css/note/normalize.css" />
		<link rel="stylesheet" type="text/css" href="/Public/css/note/square-loader.min.css" />
		<link rel="stylesheet" type="text/css" href="/Public/css/note/demo.css" />
		<link rel="stylesheet" type="text/css" href="/Public/css/note/component.css" />
		<link rel="stylesheet" type="text/css" href="/Public/css/theme.css" />
		<link rel="stylesheet" type="text/css" href="/Public/css/tip.css" />
		<!--[if IE]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<script>
			document.documentElement.className = 'js';
		</script>
	</head>

	<body>
		<div class="view">
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

			<section class="page page--mover">
				<div class="la-square-loader">
					<div></div>
				</div>
			</section>
			<div class="title-wrap">
				<h1 class="title title--main">OH<em>!</em>SNAP</h1>
				<!--<p class="title title--sub">Smart Auto-Filtering for your shots.</p>-->
			</div>
			<section class="page page--static">
				<div class="page__title">
					<h2 class="page__title-main">Polaroid Stack to Grid Intro Animation</h2>
					<p class="page__title-sub">Recreating the effect seen on the <a href="http://www.takeitapp.co/en">takeit</a> website</p>
				</div>
				<ul class="grid">
					<li class="grid__item">
						<div class="grid__box">
							<a href="http://code.taobao.org/" target="_blank">
								<h3 class="grid__item-title">TaoCode - Taocode TaoCode - Taocode</h3>
							</a>
							<div class="grid_bg_php">
								<form class="grid_form">
									<textarea name="" rows="" cols="" class="grid_textarea">介绍一下这个链接</textarea>
									<div class="grid_foot">
										<a class="fl grid_a_other" href="">ok</span></a>
										<a class="grid_a_other" href=""><span class="glyphicon glyphicon-heart"></span></a>
										<a class="grid_a_other" href="javascript:void(0);" onclick="deleteNote();"><span class="glyphicon glyphicon-trash"></span></a>
										<a class="grid_a_other" href=""><span class="glyphicon glyphicon-tags"></span></a>
										<a class="grid_a_other" href=""><span class="glyphicon glyphicon-share-alt"></span></a>
									</div>
								</form>
							</div>
						</div>
					</li>
					<?php if(is_array($mynote)): $i = 0; $__LIST__ = $mynote;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="grid__item">
							<div class="grid__box">
								<a href="<?php echo ($vo["noteurl"]); ?>" target="_blank">
									<h3 class="grid__item-title"><?php echo ($vo["notetitle"]); ?></h3>
								</a>
								<div class="grid_bg_<?php echo ($vo["noteremark1"]); ?>">
									<form class="grid_form" method="post" action="<?php echo ($update); ?>">
										<input type="hidden" name="noteid" id="noteid" value="<?php echo ($vo["noteid"]); ?>" />
										<textarea name="notecontent" onblur="updateNoteContent(<?php echo ($vo["noteid"]); ?>,this.value)"  rows="6" cols="" class="grid_textarea"><?php echo ($vo["notecontent"]); ?></textarea>										
										<div class="grid_foot">
											<input class="fl grid_input"  onblur="updateNoteTip(<?php echo ($vo["noteid"]); ?>,this.value)" value="<?php echo ($vo["noteremark1"]); ?>" name="noteremark1" />
											<!--<button class="fl grid_a_other" type="submit">ok</button>-->
											<a class="grid_a_other" href=""><span class="glyphicon glyphicon-heart"></span></a>
											<a class="grid_a_other" href="javascript:void(0);" onclick="deleteNote(<?php echo ($vo["noteid"]); ?>);"><span class="glyphicon glyphicon-trash"></span></a>
											<a class="grid_a_other" href=""><span class="glyphicon glyphicon-share-alt"></span></a>										
										</div>
									</form>
								</div>
							</div>
						</li><?php endforeach; endif; else: echo "" ;endif; ?>

				</ul>
				<!--<button class="button button--load" aria-label="Load more images">
					<svg class="polaroid" width="100%" height="100%" viewBox="0 0 220 243" preserveAspectRatio="xMidYMid meet">
						<rect class="polaroid__base" x="0" y="0" width="220" height="243" rx="5"></rect>
						<rect class="polaroid__inner" x="16" y="20" width="189" height="149"></rect>
						<g class="polaroid__loader">
							<circle cx="61.5" cy="94.5" r="17.5"></circle>
							<circle cx="110.5" cy="94.5" r="17.5"></circle>
							<circle cx="159.5" cy="94.5" r="17.5"></circle>
						</g>
					</svg>
					<span class="button__text">Load more</span>
				</button>-->
			</section>
			<div class="device">
				<div class="device__screen">
					<h1>Hi Note!</h1>
				</div>
			</div>
			<button id="showgrid" class="button button--view" aria-label="Show me more">
				<svg width="100%" height="100%" viewBox="0 0 310 177" preserveAspectRatio="xMidYMid meet">
					<path fill="#FFFFFF" d="M159.875,174.481L306.945,27.41c2.93-2.929,2.93-7.678,0-10.606L292.803,2.661c-1.406-1.407-3.314-2.197-5.303-2.197c-1.989,0-3.896,0.79-5.303,2.197L154.572,130.287L26.946,2.661c-1.406-1.407-3.314-2.197-5.303-2.197c-1.989,0-3.897,0.79-5.303,2.197L2.197,16.804C0.733,18.269,0,20.188,0,22.107s0.732,3.839,2.197,5.303l147.071,147.071C152.197,177.411,156.945,177.411,159.875,174.481L159.875,174.481z"
					/>
				</svg>
			</button>

		</div>
		<!-- /view -->
		<!-- Modal -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">增加个Note</h4>
					</div>
					<form method="post" action="<?php echo ($add); ?>" id="addNoteForm" name="addNoteForm">
						<div class="modal-body">
							
							<div class="form-group">
								<label class="sr-only" for="noteurl">URL</label>
								<div class="input-group">
									<div class="input-group-addon">URL</div>
									<input type="text" name="noteurl" class="form-control" id="noteurl" placeholder="http://....">
								</div>
							</div>
							<div class="form-group">
								<select name="noteremark1" id="noteremark1" class="form-control w100">
									<option>web</option>
									<option>php</option>
									<option>java</option>
									<option>js</option>
									<option>sql</option>
								</select>
							</div>
							<div class="form-group">
								<textarea name="notecontent" id="notecontent" class="form-control w100" rows="3" placeholder="也可以不填"></textarea>
							</div>
							<div id="addinfo"></div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							<button type="button" onclick="addNote()" class="btn btn-primary">Save</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		
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
		<script src="/Public/bootstrap/js/bootstrap.min.js"></script>
		<script src="/Public/js/note/dynamics.min.js"></script>
		<script src="/Public/js/note/classie.js"></script>
		<script src="/Public/js/note/dynamics.min.js"></script>
		<script src="/Public/js/note/imagesloaded.pkgd.min.js"></script>
		<script src="/Public/js/note/main.js"></script>
		<script src="/Public/js/func.js"></script>
	</body>

</html>