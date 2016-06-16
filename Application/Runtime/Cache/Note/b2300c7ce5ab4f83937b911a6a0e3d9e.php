<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<html xmlns:wb="http://open.weibo.com/wb">
<head>
    <meta charset="utf-8">
    <title>Note-Blskye</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="baidu-site-verification" content="vcGEtRUPOq"/>
    <meta http-equiv="keywords" content="Blskye,Note,Blog,Noteblog"/>
    <meta http-equiv="description" content="Blskye官方网站,Note,Blog,Noteblog"/>

    <!-- google web fonts -->
    <link href='http://fonts.useso.com/css?family=Roboto:400,100,300,300italic,500,400italic,700' rel='stylesheet'
          type='text/css'>

    <!-- CSS Styles -->

    <!-- bootstrap css -->
    <link href="/Public/home/style_one/css/bootstrap.css" rel="stylesheet">

    <!-- custom css -->
    <link href="/Public/home/style_one/css/custom.css" rel="stylesheet">

    <!-- standart theme css -->
    <link rel="stylesheet" id="theme" href="/Public/home/style_one/css/theme1.css" type="text/css"/>

    <!-- Font Awesome Icons css -->
    <link rel="stylesheet" href="/Public/home/style_one/font-awesome/css/font-awesome.min.css">

    <!-- BxSlider and Sequence Slider css -->
    <link rel="stylesheet" href="/Public/home/style_one/css/jquery.bxslider.css" type="text/css"/>
    <link rel="stylesheet" media="screen" href="/Public/home/style_one/css/sequence-slider.css"/>

    <!-- Magnific Popup core CSS file -->
    <link rel="stylesheet" href="/Public/home/style_one/css/magnific-popup.css">

    <!-- Color Switch Panel css -->
    <link rel="stylesheet" href="/Public/home/style_one/css/color.switch.css" type="text/css"/>

    <!-- Back to Top Button css -->
    <link rel="stylesheet" href="/Public/home/style_one/css/top.css" type="text/css"/>
    <link href="/Public/bootstrapvalidator/css/bootstrapValidator.css" type="text/css">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <!--<script src="/Public/home/style_one/js/html5shiv.js"></script>-->
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="/Public/favicon.ico">

    <link rel="stylesheet" href="/Public/css/default/home.css">
    <link rel="stylesheet" href="/Public/css/default/note.css">
    <link rel="stylesheet" type="text/css" href="/Public/css/tip.css"/>
</head>
<body>
<div class="button-top" id="top-bt">
    <a href="#note"><i class="fa fa-sort-desc fa-3x"></i></a>
</div>

<nav class="navbar navbar-inverse navbar-static-top" role="navigation" id="menu">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!--<a href="http://www.blskye.com"><img src="/Public/images/logo-z-100.png" class="logo"></a>-->
            <a class="navbar-brand" href="http://www.blskye.com">
                Blskye
            </a>
        </div>

        <!-- MENU LINKS -->
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav" id="navigation">
                <li><a href="<?php echo U('/Note/Index/index');?>">Note</a></li>
                <li><a href="<?php echo U('/Blog/Index/index');?>">Blog</a></li>
                <!--<li><a href="<?php echo U('/Home/Index/download');?>">下载</a></li>-->

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">分类 <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <!--<form action="./" method="get" id="catwordform">-->
                            <!--<input value="" name="catword" id="catword" type="hidden"/>-->
                        <!--</form>-->
                        <?php if(is_array($catlist)): $i = 0; $__LIST__ = $catlist;if( count($__LIST__)==0 ) : echo "暂时没有数据" ;else: foreach($__LIST__ as $key=>$vocat): $mod = ($i % 2 );++$i;?><li><a href="./?catword=<?php echo ($vocat["catname"]); ?>"><?php echo ($vocat["catname"]); ?></a></li>
                            <!--<li><a href="javascript:void (0)" onclick="catkey(this.innerHTML)"><?php echo ($vocat["catname"]); ?></a></li>--><?php endforeach; endif; else: echo "暂时没有数据" ;endif; ?>
                    </ul>
                </li>
            </ul>
            <div class="navbar-right">
                <ul class="nav navbar-nav">
                    <li>
                        <form class="navbar-form navbar-right" action="./" method="get">
                            <input type="text" name="keyword" class="form-control" placeholder="Search...">
                        </form>
                    </li>
                    <li>
                        <a href="#" data-toggle="modal" data-target="#myModal"><span
                                class="glyphicon glyphicon-plus"></span></a>
                    </li>
                    <?php if(empty($name)): ?><li><a href="<?php echo U('/Login/Index/index');?>">登录</a></li>
                        <li><a href="<?php echo U('/Register/Index/index');?>">注册</a></li>
                        <?php else: ?>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-haspopup="true" aria-expanded="false">
                                <img class="head-icon-home" alt="<?php echo ($name); ?>" src="/Public/images/icon/<?php echo ($name); ?>.jpg"
                                     onerror="this.src='/Public/images/icon/default.jpg'"/>
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#"><i class="fa fa-home"><span>&nbsp;&nbsp;我的主页</span></i></a></li>
                                <li><a href="<?php echo U('/User/Set/setcat');?>"><i class="fa fa-cogs"><span>&nbsp;&nbsp;帐号设置</span></i></a></li>
                                <!--<li><a href="#">Something else here</a></li>-->
                                <li role="separator" class="divider"></li>
                                <!--<li class="dropdown-header">Nav header</li>-->
                                <li><a href="#"><i class="fa fa-power-off"><span>&nbsp;&nbsp;退出登录</span></i></a></li>
                                <!--<li><a href="#">One more separated link</a></li>-->
                            </ul>
                        </li><?php endif; ?>
                </ul>
            </div>
        </div>
    </div>
</nav>
<!-- NAVBAR END -->
<!--add by wht-->
<!-- Page Content -->
<div class="container">
    <!-- Page Heading/Breadcrumbs -->
    <div class="row">
        <div class="col-lg-12">
            <h1 id="note" class="page-header">Note
                <small><?php echo ($name); ?></small>
            </h1>

        </div>
    </div>
    <!-- /.row -->

    <!-- Image Header -->
    <!--<div class="row">-->
        <!--<div class="col-lg-12">-->
            <!--<img class="img-responsive" src="http://placehold.it/1200x300" alt="">-->
        <!--</div>-->
    <!--</div>-->
    <!-- /.row -->

    <!-- Service Panels -->
    <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
    <div class="row">
        <!--<div class="filter-list">-->
            <!--<ul class="nav nav-pills">-->
                <!--<li><a class="filter" data-filter="all">全部</a></li>-->
                <!--<li><a class="filter" data-filter="cat_php">PHP</a></li>-->
                <!--<li><a class="filter" data-filter="cat_web">Web</a></li>-->
                <!--<li><a class="filter" data-filter="cat_java">其他</a></li>-->
            <!--</ul>-->
        <!--</div>-->
<!--<hr class="head-border-grey">-->
        <div class="clearfix"></div>
            <?php if(is_array($mynote)): $i = 0; $__LIST__ = $mynote;if( count($__LIST__)==0 ) : echo "暂时没有数据" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="col-md-3 col-sm-6 cat_<?php echo ($vo["noteremark1"]); ?> all">
                <div class="panel panel-success text-center">
                    <div class="panel-heading">
                        <img style="height: 32px"  class="center-block " src="http://<?php echo getIco($vo['noteurl'])?>/favicon.ico"
                             onerror="this.src='http://blskye.com/favicon.ico'"/>
                    </div>
                    <form class="grid_form" method="post" action="<?php echo ($update); ?>">
                        <input type="hidden" name="noteid" id="noteid" value="<?php echo ($vo["noteid"]); ?>" />
                    <div class="panel-body">
                        <h6>
                            <!--<input class="urltitle"-->
                                   <!--onblur="updateNoteTip(<?php echo ($vo["noteid"]); ?>,this.value)"-->
                                   <!--value="<?php echo ($vo["noteremark1"]); ?>" name="noteremark1" />-->
                            <select class="form-control" name="noteremark1" id="classification"  onblur="updateNoteTip(<?php echo ($vo["noteid"]); ?>,this.value)">
                               <option><?php echo ($vo["noteremark1"]); ?></option>
                                <?php if(is_array($catlist)): $i = 0; $__LIST__ = $catlist;if( count($__LIST__)==0 ) : echo "暂时没有数据" ;else: foreach($__LIST__ as $key=>$volist): $mod = ($i % 2 );++$i;?><option>
                                        <?php echo ($volist["catname"]); ?>
                                    </option><?php endforeach; endif; else: echo "暂时没有数据" ;endif; ?>
                            </select>
                        </h6>
                        <p><?php echo ($vo["notetitle"]); ?></p>
                        <textarea class="urlcontent" name="notecontent" onblur="updateNoteContent(<?php echo ($vo["noteid"]); ?>,this.value)"
                                  rows="1" cols="" class="grid_textarea"><?php echo ($vo["notecontent"]); ?></textarea>
                        <a onclick="noteclick(<?php echo ($vo["noteid"]); ?>)" href="<?php echo ($vo["noteurl"]); ?>" target="_blank" class="btn btn-default">打开</a>
                    </div>
                    <div class="panel-footer">
                        <ul class="list-inline">
                            <li class="note-fire"><span class="fa fa-fire"></span> <?php echo ($vo["noteclick"]); ?></li>
                            <!--<li> <a  href=""><span class="glyphicon glyphicon-heart"></span></a></li>-->
                            <li class="note-del"><a  href="javascript:void(0);" onclick="deleteNote(<?php echo ($vo["noteid"]); ?>);"><span class="glyphicon glyphicon-trash"></span></a></li>
                            <li class="note-share"> <a href=""><span class="glyphicon glyphicon-share-alt"></span></a></li>

                        </ul>
                    </div>
                    </form>
                </div>
            </div>
            </li><?php endforeach; endif; else: echo "暂时没有数据" ;endif; ?>

    </div>
    <nav class="black-link-content"><?php echo ($page); ?></nav>
</div>
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

                                <?php if(is_array($catlist)): $i = 0; $__LIST__ = $catlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option>
                                        <?php echo ($vo["catname"]); ?>
                                    </option><?php endforeach; endif; else: echo "" ;endif; ?>

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

<div id="foot">

    <div class="container">
        <div class="row">

            <div class="col-lg-4 col-md-4">
                <div class="bottom-con">

                    <h5>地址</h5>
                    <hr class="head-border-white">

                    <div class="">
                        <!--<p><i class="fa fa-location-arrow"><span> 故乡：山东济宁泗水</span></i></p>-->

                        <p><i class="fa fa-map-marker"><span> 山东济宁泗水</span></i></p>

                        <p><i class="fa fa-flag"><span> 中国</span></i></p>
                    </div>

                </div>
            </div>

            <div class="col-lg-4 col-md-4">
                <div class="bottom-con">

                    <h5>联系方式</h5>
                    <hr class="head-border-white">

                    <div class="">
                        <p><i class="fa fa-phone"><span> 15966516502</span></i></p>

                        <p><i class="fa fa-envelope"><span> wht@blskye.com</span></i></p>

                        <!--<p><i class="fa fa-print"><span> +49 621 123 321 124</span></i></p>-->
                    </div>

                </div>
            </div>

            <div class="col-lg-4 col-md-4">

                <div class="bottom-con">

                    <h5>其他</h5>
                    <hr class="head-border-white">

                    <div class="">
                        <!-- weibo-->
                        <script src="http://tjs.sjs.sinajs.cn/open/api/js/wb.js" type="text/javascript"
                                charset="utf-8"></script>


                        <p><a href="https://github.com/EchoWht"><i class="fa fa-github"><span> Echowht</span></i></p>
                        <!--<p><wb:follow-button uid="3894404042" style="margin:0px;padding:0px" type="red_3" width="100%" height="24" ></wb:follow-button>-->
                        <!--</p>-->
                        <!--<p><i class="fa fa-print"><span> +49 621 123 321 124</span></i></p>-->
                    </div>

                </div>

            </div>

            <div class="col-lg-12 col-md-12 footer">
                <!--<p class="pull-right"><a href="#about"><img src="/Public/home/style_one/img/top.png"></a></p>-->
                <div class="center-block" style="width:200px; text-align: center">
                    <p><a href="http://www.blskye.com">&copy;Blskye.com</a><a href="">&nbsp;by&nbsp;王昊天</a></p>

                    <p><a href="http://www.miitbeian.gov.cn/">鲁ICP备16010845号</a></p>
                </div>

            </div>

        </div>
    </div>

</div>

<!-- FOOTER END -->

<!-- COLOR SWITCH. Change Styles at the color.switch.css file -->

<div class="editor">

    <div class="panel">

        <h5>Choose your Color</h5>

        <div id="changecss">

            <div class="row">

                <div class="circle-skin"><a href="javascript: void(0)" title="switch styling" id="theme1">
                    <div class="left skin1-l"></div>
                    <div class="right skin1-r"></div>
                </a></div>

                <div class="circle-skin"><a href="javascript: void(0)" title="switch styling" id="theme2">
                    <div class="left skin2-l"></div>
                    <div class="right skin2-r"></div>
                </a></div>

                <div class="circle-skin"><a href="javascript: void(0)" title="switch styling" id="theme3">
                    <div class="left skin3-l"></div>
                    <div class="right skin3-r"></div>
                </a></div>

                <div class="circle-skin"><a href="javascript: void(0)" title="switch styling" id="theme4">
                    <div class="left skin4-l"></div>
                    <div class="right skin4-r"></div>
                </a></div>

                <div class="circle-skin"><a href="javascript: void(0)" title="switch styling" id="theme5">
                    <div class="left skin5-l"></div>
                    <div class="right skin5-r"></div>
                </a></div>

                <div class="circle-skin"><a href="javascript: void(0)" title="switch styling" id="theme6">
                    <div class="left skin6-l"></div>
                    <div class="right skin6-r"></div>
                </a></div>

            </div>

        </div>

        <div class="clearfix"></div>


    </div>

    <div class="switch">
        <i class="fa fa-cog fa-spin fa-2x"></i>
    </div>

</div>

<!-- COLOR SWITCH END -->

<!-- END PRIMARY LAYOUT
====================== -->
<!-- COLOR SWITCH END -->

<!-- END PRIMARY LAYOUT
====================== -->


<!-- JAVASCRIPT
================================================== -->

<!-- BOOTSTRAP JAVASCRIPT -->
<script type="text/javascript" src="/Public/bootstrap/js/jquery.min.js"></script>
<script type="text/javascript" src="/Public/bootstrap/js/bootstrap.min.js"></script>

<!-- CUSTOM JAVASCRIPT -->
<!-- Custom Functions -->
<script type="text/javascript" src="/Public/home/style_one/js/functions.js"></script>

<!-- Portfolio with mixitup filter and prettyphoto -->
<script type="text/javascript" src="/Public/home/style_one/js/jquery.mixitup.min.js"></script>
<!-- Magnific Popup core JS file -->
<script type="text/javascript" src="/Public/home/style_one/js/magnific.js"></script>

<!-- BxSlider -->
<script type="text/javascript" src="/Public/home/style_one/js/jquery.bxslider.min.js"></script>

<!-- Sequence Slider -->
<script type="text/javascript" src="/Public/home/style_one/js/jquery.sequence-min.js"></script>

<!-- Parallax Background -->
<script type="text/javascript" src="/Public/home/style_one/js/nbw-parallax.js"></script>
<script type="text/javascript" src="/Public/home/style_one/js/jquery.inview.js"></script>

<!-- Smooth Scrolling -->
<script type="text/javascript" src="/Public/home/style_one/js/smoothscroll.js"></script>

<!-- Sticky Navigation -->
<script type="text/javascript" src="/Public/home/style_one/js/jquery.sticky.js"></script>

<!-- Style Switcher -->
<script type="text/javascript" src="/Public/home/style_one/js/jquery.style-switcher.js"></script>

<!-- Clients Slider -->
<script type="text/javascript" src="/Public/home/style_one/js/jquery.flexisel.js"></script>

<!-- Retina JS -->
<script type="text/javascript" src="/Public/home/style_one/js/retina-1.1.0.min.js"></script>

<script src="/Public/js/func.js"></script>

<script src="/Public/js/note/note.js"></script>
</body>
</html>