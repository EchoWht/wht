<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<html xmlns:wb="http://open.weibo.com/wb">
<head>
    <meta charset="utf-8">
    <title>Blog-Blskye</title>
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
    <!--<link href="/Public/bootstrap/css/bootstrap.min.css" rel="stylesheet">-->
    <!-- custom css -->
    <!--link href="/Public/home/style_one/css/custom.css" rel="stylesheet"-->

    <!-- standart theme css -->
    <link rel="stylesheet" id="theme" href="/Public/home/style_one/css/theme1.css" type="text/css"/>

    <!-- Font Awesome Icons css -->
    <link rel="stylesheet" href="/Public/home/style_one/font-awesome/css/font-awesome.min.css">

    <!-- BxSlider and Sequence Slider css -->
    <link rel="stylesheet" href="/Public/home/style_one/css/jquery.bxslider.css" type="text/css"/>
    <!--link rel="stylesheet" media="screen" href="/Public/home/style_one/css/sequence-slider.css"/-->

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
    <link rel="apple-touch-icon" href="/Public/home/style_one/img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/Public/home/style_one/img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/Public/home/style_one/img/apple-touch-icon-114x114.png">
    <link rel="stylesheet" href="/Public/css/default/home.css">
    <link rel="stylesheet" type="text/css" href="/Public/css/tip.css"/>
    <?php if(empty($name)): ?><link rel="stylesheet" href='/Public/highlight/styles/default.css'>
        <?php else: ?>
        <link rel="stylesheet" href='/Public/highlight/styles/<?php echo (session('codestyle')); ?>.css'><?php endif; ?>


    <!--阅读显示页面样式-->
    <script src="/Public/highlight/highlight.pack.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>

    <!-- Your Google Analytics Code Here!! -->
    <style>

        .logo {
            width: 40px;
            line-height: 50px;
            float: left;
        }


        .panel:hover a{
            color: #008800;
        }
        .panel-body p{
            height: 25px;OVERFLOW-Y: auto;
        }
        .blog-content{
            max-height: 100px;
            text-overflow: ellipsis;
            overflow: hidden;
            /*border-bottom: 1px solid #005C5F;*/
        }

    </style>
</head>
<body>
<div class="button-top" id="top-bt">
    <a href="#about"><i class="fa fa-sort-desc fa-3x"></i></a>
</div>
<!-- NAVBAR Start -->
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
                <li><a href="<?php echo U('/Home/Blog/index');?>">大厅</a></li>
                <li><a href="<?php echo U('/Blog/Index/add');?>"><span
                        class="glyphicon glyphicon-plus"></span>&nbsp;新建</a></li>

                <!--<li class="dropdown">-->
                <!--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"-->
                <!--aria-expanded="false">下载 <span class="caret"></span></a>-->
                <!--<ul class="dropdown-menu">-->
                <!--<li><a href="#notechajian">Note插件</a></li>-->
                <!--</ul>-->
                <!--</li>-->
            </ul>
            <div class="navbar-right">
                <ul class="nav navbar-nav">

                    <li>
                        <a href="<?php echo U('/User/Set/setcodestyle');?>">&lt/code&gt
                            样式</a>
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
<div class="container black-link-content">

    <!-- Page Heading/Breadcrumbs -->
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header"><?php echo ($myblog[0][arttitle]); ?>
            
            </h3>
          
        </div>
    </div>
    <!-- /.row -->

    <!-- Content Row -->
    <div class="row">

        <!-- Blog Post Content Column -->
        <div class="col-lg-12">

            <!-- Blog Post -->
			<ul class="list-inline" style="color: #c0c0c0">
				<li>
					<img style="width: 16px;border-radius: 50%;line-height:50px" alt="<?php echo ($vo["username"]); ?>"
					src="/Public/images/icon/<?php echo ($myblog[0][username]); ?>.jpg"
					onerror="this.src='/Public/images/icon/default.jpg'"/>
					<a href="<?php echo U('User/Index/index');?>?u=<?php echo ($vo["username"]); ?>"><?php echo ($myblog[0][username]); ?></a>
				</li>
				<li>
					<span class="fa fa-tag"></span> <span><?php echo ($myblog[0][artremark1]); ?></span>
				</li>
				<li>
					<span class="fa fa-clock-o"></span><?php echo ($myblog[0][artdate]); ?>	
				</li>
			</ul>	
			<hr>
            
                <p>
                    <?php echo ($myblog[0][artcontent]); ?>
                </p>
            <a  class="btn btn-success"  href="<?php echo U('/Blog/Index/edit');?>?artid=<?php echo ($myblog[0][artid]); ?>">修改</a>
            <a  class="btn btn-success"  href="javascript:void(0);" onclick="deleteBlog(<?php echo ($myblog[0][artid]); ?>)">删除</a>
            <hr>

            <!-- Blog Comments -->

            <!-- Comments Form -->
            <div class="well">
                <h4>评论:</h4>

                <form role="form">
                    <div class="form-group">
                        <textarea class="form-control" rows="3">暂未开放！</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>

            <hr>


            <!-- Posted Comments -->

            <!-- Comment -->
            <!--<div class="media">-->
                <!--<a class="pull-left" href="#">-->
                    <!--<img class="media-object" src="http://placehold.it/64x64" alt="">-->
                <!--</a>-->

                <!--<div class="media-body">-->
                    <!--<h4 class="media-heading">Start Bootstrap-->
                        <!--<small>August 25, 2014 at 9:30 PM</small>-->
                    <!--</h4>-->
                    <!--Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.-->
                    <!--Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi-->
                    <!--vulputate fringilla. Donec lacinia congue felis in faucibus.-->
                <!--</div>-->
            <!--</div>-->

            <!-- Comment -->
            <!--<div class="media">-->
                <!--<a class="pull-left" href="#">-->
                    <!--<img class="media-object" src="http://placehold.it/64x64" alt="">-->
                <!--</a>-->

                <!--<div class="media-body">-->
                    <!--<h4 class="media-heading">Start Bootstrap-->
                        <!--<small>August 25, 2014 at 9:30 PM</small>-->
                    <!--</h4>-->
                    <!--Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.-->
                    <!--Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi-->
                    <!--vulputate fringilla. Donec lacinia congue felis in faucibus.-->
                    <!--&lt;!&ndash; Nested Comment &ndash;&gt;-->
                    <!--<div class="media">-->
                        <!--<a class="pull-left" href="#">-->
                            <!--<img class="media-object" src="http://placehold.it/64x64" alt="">-->
                        <!--</a>-->

                        <!--<div class="media-body">-->
                            <!--<h4 class="media-heading">Nested Start Bootstrap-->
                                <!--<small>August 25, 2014 at 9:30 PM</small>-->
                            <!--</h4>-->
                            <!--Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin-->
                            <!--commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce-->
                            <!--condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.-->
                        <!--</div>-->
                    <!--</div>-->
                    <!--&lt;!&ndash; End Nested Comment &ndash;&gt;-->
                <!--</div>-->
            <!--</div>-->

        </div>

        <!-- Blog Sidebar Widgets Column 
        -->

    </div>
    <!-- /.row -->

    <hr>
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
<!--<script src="/Public/bootstrapvalidator/js/bootstrapValidator.js"></script>-->

<script src="/Public/js/func.js"></script>
<script>
    var fabiao=document.getElementById('fabiao');
    var arttitle=document.getElementById('arttitle');
    var addblog=document.getElementById('addblog');
    function  sub_art(){
        if(arttitle.value==''){
            arttitle.onfocus;
            arttitle.style.cssText='border-color:red';
        }else{
            addblog.submit();
        }
    }
    arttitle.onclick=function () {
        arttitle.style.cssText='border-color:#c0c0c0';
    }
</script>

</body>
</html></html>