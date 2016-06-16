<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<html xmlns:wb="http://open.weibo.com/wb">
<head>
    <meta charset="utf-8">
    <title>Blskye</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="baidu-site-verification" content="vcGEtRUPOq" />
    <meta http-equiv="keywords" content="Blskye,Note,Blog,Noteblog" />
    <meta http-equiv="description" content="Blskye官方网站,Note,Blog,Noteblog"  />

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
    <link rel="apple-touch-icon" href="/Public/home/style_one/img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/Public/home/style_one/img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/Public/home/style_one/img/apple-touch-icon-114x114.png">
    <script src="/Public/js/Chart.min.js"></script>
    <!-- Your Google Analytics Code Here!! -->
    <style>

        .logo{
            width:40px;
            line-height: 50px;
            float: left;
        }
        .navbar-brand{
            background: url("/Public/images/logo-z-100.png") no-repeat left center;
            background-size: 40px;
            padding-left: 50px;
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
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">大厅 <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo U('/Home/Blog/index');?>">Blog大厅</a></li>
                    </ul>
                </li>

                <!--<li><a href="<?php echo U('/Home/Index/download');?>">下载</a></li>-->

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">更多 <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#about">关于网站</a></li>
                        <li><a href="#service">工具</a></li>
                        <li><a href="#portfolio">热恋</a></li>
                        <li><a href="#team">美文</a></li>
                        <li><a href="#price">统计</a></li>
                        <!--<li><a href="#clients">Clients</a></li>-->
                        <!--<li><a href="#facts">Facts</a></li>-->
                        <li><a href="#contact">留言板</a></li>
                    </ul>
                </li>
            </ul>
            <div class="navbar-right">
                <ul class="nav navbar-nav">
                    <?php if(empty($name)): ?><li><a href="<?php echo U('/Login/Index/index');?>">登录</a></li>
                        <li><a href="<?php echo U('/Register/Index/index');?>">注册</a></li>
                        <?php else: ?>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
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

<!-- SEQUENCE SLIDER Change Styles at the sequence-slider.css file -->

<div id="top-slider">
    <div class="slider-bg"></div>
    <div class="container">

        <div id="sequence">

            <img class="sequence-prev" src="/Public/home/style_one/img/button-previous.svg" alt="Previous Frame"/>
            <img class="sequence-next" src="/Public/home/style_one/img/button-next.svg" alt="Next Frame"/>

            <ul class="sequence-canvas">
                <li class="animate-in">
                    <a href="<?php echo U('/Note/Index/index');?>" class="title">Note GO!</a>

                    <h3 class="subtitle">收藏整理链接，让工作学习更效率</h3>
                    <img class="slider-image" src="/Public/home/style_one/img/slider/1.png" alt="Image"/>
                </li>
                <li>
                    <a href="<?php echo U('/Blog/Index/index');?>" class="title">Blog GO!</a>

                    <h3 class="subtitle">分享工作或学习遇到的问题和解决方法</h3>
                    <img class="slider-image" src="/Public/home/style_one/img/slider/2.png" alt="Image"/>
                </li>
                <li>
                    <a href="" class="title">围观 GO!</a>

                    <h3 class="subtitle">看看他人的记录</h3>
                    <img class="slider-image" src="/Public/home/style_one/img/slider/3.png" alt="Image"/>
                </li>

            </ul>

            <ul class="sequence-pagination">
                <li><img src="/Public/home/style_one/img/pagination-dot.svg" alt="Image"/></li>
                <li><img src="/Public/home/style_one/img/pagination-dot.svg" alt="Image"/></li>
                <li><img src="/Public/home/style_one/img/pagination-dot.svg" alt="Image"/></li>
            </ul>

        </div>

    </div>
</div>

<!-- SEQUENCE SLIDER END -->

<!-- ABOUT US -->

<div id="about">

    <div class="container">

        <!-- BUY AND LIKE BUTTONS (YOU CAN DELET THEM IF YOU DONT USE) -->

        <!--<div class="col-lg-12 col-md-12 col-xs-12">-->

        <!--<div class="col-lg-6 col-md-6 col-xs-6 btn-buy">-->
        <!--<p><a class="btn btn-primary btn-top" href="#" role="button">BUY THEME!</a></p>-->
        <!--</div>-->

        <!--<div class="col-lg-6 col-md-6 col-xs-6 btn-like">-->
        <!--<p><a class="btn btn-primary btn-top" href="http://www.facebook.com/share.php?u=http://www.fabianbentz.de/demo/threesixty/index.html" role="button">LIKE THEME!</a></p>-->
        <!--</div>-->

        <!--</div>-->

        <!-- BUY AND LIKE BUTTONS END (YOU CAN DELET THEM IF YOU DONT USE) -->

        <div class="center-block head">

            <h1>这个网站是干什么的？</h1>
            <hr class="head-border-grey">

        </div>

        <div class="agency col-lg-5 col-lg-offset-1 col-md-5 col-md-offset-1">
            <p>呃····</p>

            <p style="text-indent: 1cm">这么说吧，这是个无聊的技术小白在自己空余的时间，边学边做了一些自己能用着的小应用，当然能帮助他人是最最最好不过了！（
                要是能无耻的赚点外快升级下服务器那就太好了_(:з」∠)_ ，梦想还是要有的，万一真有人捐了呢，来壮士，点击<a style="color:#da4939 " href="">捐赠5毛</a>）

            </p>

            <div class="skills">
                <h4 style="color:#e67e22">模块开发进度</h4>
                <ul id="skillbar">
                    <li><span style="width: 85%;" class="skillbar jindu"></span>

                        <p>Note(85%)</p></li>

                    <li><span style="width: 95%;" class="skillbar jindu"></span>

                        <p>Blog(95%)</p></li>

                    <li><span style="width: 85%;" class="skillbar jindu"></span>

                        <p>Note chrome插件(85%)</p></li>

                    <li><span style="width: 1%;" class="skillbar jindu"></span>

                        <p>Note 火狐插件(1%)</p></li>

                    <!--<li><span style="width: 85%;" class="skillbar jindu"></span><p>PHOTOSHOP/ILLUSTRATOR</p></li>-->
                </ul>

            </div>

        </div>

        <!-- About Us Slider. Change Styles at the jquery.bxlsider.css file -->

        <div class="col-lg-5 col-md-5">
            <ul class="aboutus">

                <li>
                    <img class="img-responsive" src="/Public/home/style_one/img/agency-img3.jpg" alt="YOUR TEXT HERE">
                </li>

                <li>
                    <img class="img-responsive" src="/Public/home/style_one/img/agency-img2.jpg" alt="YOUR TEXT HERE">
                </li>

                <li>
                    <img class="img-responsive" src="/Public/home/style_one/img/agency-img.jpg" alt="YOUR TEXT HERE">
                </li>

            </ul>

        </div>

    </div>
</div>

<!-- ABOUT END -->

<!-- SERVICE -->

<div id="service">

    <div class="container">

        <div class="row">

            <div class="center-block head">

                <div class="col-lg-12 col-md-12 col-xs-12">

                    <h1>工具，工欲善其事必先利其器</h1>
                    <hr class="head-border-white">
                    <p class="subhead">我们可以通过一些工具更好的管理自己的Note Blog</p>
                </div>

            </div>

            <!-- SERVICE COLUMNS -->
            <div class="col-lg-4 col-md-4 service">
                <div class="service-col">

                    <div class="icon-desktop rotate">
                        <img src="/Public/home/style_one/img/icons/webdesign.png" alt="">
                    </div>

                    <h4>Note chrome插件</h4>

                    <p style="">
                        Note Chrome插件,名字太长了，我们就叫他“NC”吧，
                        ···算了，不太好听。他是一个能够将你想要收藏的链接快速的放到Note中，
                        其中包括链接的地址，标题，等(为什么加了个“等”，
                        因为我感觉还有强的功能我没发现_(:з」∠)_)
                    </p>

                </div>
            </div>

            <div class="col-lg-4 col-md-4 service">
                <div class="service-col">

                    <div class="icon-wrench rotate">
                        <img src="/Public/home/style_one/img/icons/graphicdesign.png" alt="">
                        <!--<img src="<?php echo U('Home/Image/graph_note');?>" >-->
                    </div>

                    <h4>Note 火狐插件</h4>

                    <p style="">Note 火狐插件,“NF”这个还挺好听。
                        他的功能和chrom插件应该是相同，
                        为什么说是应该，因为还特么没开发···_(:з」∠)_
                        详情见首页“模块开发进度”敬请期待···
                    </p>

                </div>
            </div>

            <div class="col-lg-4 col-md-4 service">
                <div class="service-col">

                    <div class="icon-mobile rotate">
                        <img src="/Public/home/style_one/img/icons/mobile.png" alt="">
                    </div>

                    <h4>这个是来凑数的</h4>

                    <p>
                        “为什么只有谷歌和火狐的插件，那我的360浏览器，qq浏览器···怎么用！”，
                        这些国内的浏览器好像都是谷歌的内核，都可以直接使用chrome插件。
                        什么你用的IE？！友谊的小船说翻就翻！哦，Safari和Opera啊···
                    </p>

                </div>
            </div>

                <div class="center-block service-btn">
                    <p class="center">
                        <a class="btn btn-hire btn-primary" href="<?php echo U('/Home/Download');?>" role="button"><i class="fa fa-cloud-download"></i>去下载</a>
                    </p>
                </div>

        </div>
    </div>
</div>

<!-- SERVICE END -->

<!-- PORTFOLIO -->

<div id="portfolio">

    <div class="container">


        <div class="center-block head">

            <div class="col-lg-12 col-md-12 col-xs-12">

                <h1 class="d-grey">热恋，一些常用的链接</h1>
                <hr class="head-border-grey">

            </div>

        </div>

        <div class="filter-list">
            <ul class="nav nav-pills">
                <li><a class="filter" data-filter="all">全部</a></li>
                <li><a class="filter" data-filter="cat_php">PHP</a></li>
                <li><a class="filter" data-filter="cat_2">Web</a></li>
                <li><a class="filter" data-filter="cat_3">其他</a></li>
            </ul>
        </div>

        <div class="clearfix"></div>

        <div id="Grid" class="row gallery">

            <div class="col-lg-3 col-md-6 col-sm-12 images  cat_php all">
                <div class="image">
                    <div class="">

                        <div class="caption">
                            <h5>Thumbnail Headline</h5>

                            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod.</p>

                            <p>
                                <a href="/Public/home/style_one/img/portfolio/2.jpg" title="ZOOM"
                                   class="magnific-popup btn btn-primary">Zoom</a>
                            </p>
                        </div>

                        <img class="img-responsive" src="/Public/home/style_one/img/portfolio/2.jpg" alt=""/>

                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12 images mix cat_2 all">
                <div class="image">
                    <div class="overlay">

                        <div class="caption">
                            <h5>Thumbnail Headline</h5>

                            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod.</p>

                            <p>
                                <a href="/Public/home/style_one/img/portfolio/3.jpg" title="ZOOM"
                                   class="magnific-popup btn btn-primary">Zoom</a>
                            </p>
                        </div>

                        <img class="img-responsive" src="/Public/home/style_one/img/portfolio/3.jpg" alt=""/>

                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12 images mix cat_3 all">
                <div class="image">
                    <div class="overlay">

                        <div class="caption">
                            <h5>Thumbnail Headline</h5>

                            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod.</p>

                            <p>
                                <a href="/Public/home/style_one/img/portfolio/4.jpg" title="ZOOM"
                                   class="magnific-popup btn btn-primary">Zoom</a>
                            </p>
                        </div>

                        <img class="img-responsive" src="/Public/home/style_one/img/portfolio/4.jpg" alt=""/>

                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12 images mix cat_1 all">
                <div class="image">
                    <div class="overlay">

                        <div class="caption">
                            <h5>Thumbnail Headline</h5>

                            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod.</p>

                            <p>
                                <a href="/Public/home/style_one/img/portfolio/5.jpg" title="ZOOM"
                                   class="magnific-popup btn btn-primary">Zoom</a>
                            </p>
                        </div>

                        <img class="img-responsive" src="/Public/home/style_one/img/portfolio/5.jpg" alt=""/>

                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12 images mix cat_2 all">
                <div class="image">
                    <div class="overlay">

                        <div class="caption">
                            <h5>Thumbnail Headline</h5>

                            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod.</p>

                            <p>
                                <a href="/Public/home/style_one/img/portfolio/6.jpg" title="ZOOM"
                                   class="magnific-popup btn btn-primary">Zoom</a>
                            </p>
                        </div>

                        <img class="img-responsive" src="/Public/home/style_one/img/portfolio/6.jpg" alt=""/>

                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12 images mix cat_1 all">
                <div class="image">
                    <div class="overlay">

                        <div class="caption">
                            <h5>Thumbnail Headline</h5>

                            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod.</p>

                            <p>
                                <a href="/Public/home/style_one/img/portfolio/2.jpg" title="ZOOM"
                                   class="magnific-popup btn btn-primary">Zoom</a>
                            </p>
                        </div>

                        <img class="img-responsive" src="/Public/home/style_one/img/portfolio/2.jpg" alt=""/>

                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12 images mix cat_1 all">
                <div class="image">
                    <div class="overlay">

                        <div class="caption">
                            <h5>Thumbnail Headline</h5>

                            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod.</p>

                            <p>
                                <a href="/Public/home/style_one/img/portfolio/3.jpg" title="ZOOM"
                                   class="magnific-popup btn btn-primary">Zoom</a>
                            </p>
                        </div>

                        <img class="img-responsive" src="/Public/home/style_one/img/portfolio/3.jpg" alt=""/>

                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12 images mix cat_3 all">
                <div class="image">
                    <div class="overlay">

                        <div class="caption">
                            <h5>Thumbnail Headline</h5>

                            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod.</p>

                            <p>
                                <a href="/Public/home/style_one/img/portfolio/4.jpg" title="ZOOM"
                                   class="magnific-popup btn btn-primary">Zoom</a>
                            </p>
                        </div>

                        <img class="img-responsive" src="/Public/home/style_one/img/portfolio/4.jpg" alt=""/>

                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12 images mix cat_1 all">
                <div class="image">
                    <div class="overlay">

                        <div class="caption">
                            <h5>Thumbnail Headline</h5>

                            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod.</p>

                            <p>
                                <a href="/Public/home/style_one/img/portfolio/5.jpg" title="ZOOM"
                                   class="magnific-popup btn btn-primary">Zoom</a>
                            </p>
                        </div>

                        <img class="img-responsive" src="/Public/home/style_one/img/portfolio/5.jpg" alt=""/>

                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12 images mix cat_1 all">
                <div class="image">
                    <div class="overlay">

                        <div class="caption">
                            <h5>Thumbnail Headline</h5>

                            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod.</p>

                            <p>
                                <a href="/Public/home/style_one/img/portfolio/6.jpg" title="ZOOM"
                                   class="magnific-popup btn btn-primary">Zoom</a>
                            </p>
                        </div>

                        <img class="img-responsive" src="/Public/home/style_one/img/portfolio/6.jpg" alt=""/>

                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12 images mix cat_3 all">
                <div class="image">
                    <div class="overlay">

                        <div class="caption">
                            <h5>Thumbnail Headline</h5>

                            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod.</p>

                            <p>
                                <a href="/Public/home/style_one/img/portfolio/2.jpg" title="ZOOM"
                                   class="magnific-popup btn btn-primary">Zoom</a>
                            </p>
                        </div>

                        <img class="img-responsive" src="/Public/home/style_one/img/portfolio/2.jpg" alt=""/>

                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12 images mix cat_2 all">
                <div class="image">
                    <div class="overlay">

                        <div class="caption">
                            <h5>Thumbnail Headline</h5>

                            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod.</p>

                            <p>
                                <a href="/Public/home/style_one/img/portfolio/3.jpg" title="ZOOM"
                                   class="magnific-popup btn btn-primary">Zoom</a>
                            </p>
                        </div>

                        <img class="img-responsive" src="/Public/home/style_one/img/portfolio/3.jpg" alt=""/>

                    </div>
                </div>
            </div>

        </div>
    </div>

</div>
<div id="team">
    <div class="container">

        <div class="row">

            <div class="center-block head">

                <div class="col-lg-12 col-md-12 col-xs-12">

                    <h1 class="">美文，一些精彩的文章</h1>
                    <hr class="head-border-white">
                    <p class="subhead">学习的第一步就是去看别人学的什么</p>

                </div>

            </div>

            <!-- TEAM MEMBER -->

            <div class="col-lg-3 col-md-3">
                <a href="">
                    <div class="team team-member1">
                        <div class="member1 rotate"></div>
                        <h5>Jane Doe</h5>

                        <p class="job">CEO / Founder</p>

                        <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh
                            ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at
                            eros.</p>

                        <p class="social-team">
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-3">
                <a href="">
                    <div class="team team-member1">
                        <div class="member1 rotate"></div>
                        <h5>Jane Doe</h5>

                        <p class="job">CEO / Founder</p>

                        <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh
                            ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at
                            eros.</p>

                        <p class="social-team">
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-3">
                <a href="">
                    <div class="team team-member1">
                        <div class="member1 rotate"></div>
                        <h5>Jane Doe</h5>

                        <p class="job">CEO / Founder</p>

                        <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh
                            ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at
                            eros.</p>

                        <p class="social-team">
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-3">
                <a href="">
                    <div class="team team-member1">
                        <div class="member1 rotate"></div>
                        <h5>Jane Doe</h5>

                        <p class="job">CEO / Founder</p>

                        <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh
                            ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at
                            eros.</p>

                        <p class="social-team">
                        </p>
                    </div>
                </a>
            </div>

        </div>
    </div>
</div>

<!-- TEAM  END-->

<!-- PRICE -->

<div id="price">

    <div class="container">
        <div class="row">

            <div class="center-block head">

                <div class="col-lg-12 col-md-12 col-xs-12">

                    <h1>统计</h1>
                    <hr class="head-border-white">
                    <p class="subhead">近几个月数据统计</p>

                </div>

            </div>

            <!-- SERVICE COLUMNS -->
            <div class="col-lg-4 col-md-4">
                <div class="fun-fact">
                    <img style="border: 3px solid #27ad60" src="<?php echo U('Home/Image/graph_note');?>">

                    <h3>Note</h3>
                    <hr class="head-border-grey">
                    <p><?php echo ($countnote); ?></p>
                </div>
            </div>

            <div class="col-lg-4 col-md-4">
                <div class="fun-fact">
                    <img style="border: 3px solid #27ad60" src="<?php echo U('Home/Image/graph_blog');?>">

                    <h3>Blog</h3>
                    <hr class="head-border-grey">
                    <p><?php echo ($countblog); ?></p>
                </div>
            </div>

            <div class="col-lg-4 col-md-4">
                <div class="fun-fact">
                    <img style="border: 3px solid #27ad60" src="<?php echo U('Home/Image/graph_user');?>">

                    <h3>用户</h3>
                    <hr class="head-border-grey">
                    <p><?php echo ($countuser); ?></p>
                </div>
            </div>

        </div>

    </div>
</div>

<!-- PRICE END -->

<!-- PROCESS -->


<!-- PROCESS END -->

<!-- CLIENTS -->

<!--<div id="clients">-->

    <!--<div class="container">-->
        <!--<div class="row">-->


        <!--</div>-->
    <!--</div>-->
<!--</div>-->

<!-- CLIENTS END -->

<!-- FACTS -->

<div id="facts">

    <div class="container">

        <div class="row">

            <div class="center-block head">

                <div class="col-lg-12 col-md-12 col-xs-12">

                    <h1>先占个坑</h1>
                    <hr class="head-border-white">
                    <p class="subhead">设计说，没这块整体就不搭配了</p>
                    <div style="width:100%;background: #fff">
                        <canvas id="canvas"></canvas>
                    </div>
                </div>

            </div>

            <!-- SERVICE COLUMNS -->
            <!--<div class="col-lg-4 col-md-4">-->
                <!--<div class="fun-fact">-->
                    <!--<img style="border: 3px solid #27ad60" src="<?php echo U('Home/Image/graph_note');?>">-->

                    <!--<h3>Note</h3>-->
                    <!--<hr class="head-border-grey">-->
                    <!--<p><?php echo ($countnote); ?></p>-->
                <!--</div>-->
            <!--</div>-->

            <!--<div class="col-lg-4 col-md-4">-->
                <!--<div class="fun-fact">-->
                    <!--<img style="border: 3px solid #27ad60" src="<?php echo U('Home/Image/graph_note');?>">-->

                    <!--<h3>Blog</h3>-->
                    <!--<hr class="head-border-grey">-->
                    <!--<p><?php echo ($countblog); ?></p>-->
                <!--</div>-->
            <!--</div>-->

            <!--<div class="col-lg-4 col-md-4">-->
                <!--<div class="fun-fact">-->
                    <!--<img style="border: 3px solid #27ad60" src="<?php echo U('Home/Image/graph_note');?>">-->

                    <!--<h3>用户</h3>-->
                    <!--<hr class="head-border-grey">-->
                    <!--<p><?php echo ($countuser); ?></p>-->
                <!--</div>-->
            <!--</div>-->

            <!--<div class="col-lg-3 col-md-3">-->
            <!--<div class="fun-fact">-->
            <!--<h3>Coffee<br> Made</h3>-->
            <!--<hr class="head-border-grey">-->
            <!--<p>30295</p>-->
            <!--</div>-->
            <!--</div>-->

        </div>
    </div>
</div>

<!-- FACTS END -->

<!-- CONTACT -->

<div id="contact">

    <div class="container">
        <div class="row">
            <div class="center-block head">
                <div class="col-lg-12 col-md-12 col-xs-12">
                    <h1>留言版</h1>
                    <hr class="head-border-grey">
                    <p class="center">“能说脏话吗？”···(′▽`〃)</p>
                </div>
            </div>

            <!-- CONTACT FORM -->
            <div class="col-lg-8 col-md-8 col-lg-offset-2 col-md-offset-2 form">
                <!--FORM -->
                <form action="<?php echo U('Message/Index/message');?>" class="form-horizontal" role="form" id="contactForm" method="post"
                      name="contactForm">
                    <?php if(empty($name)): ?><div class="form-group">

                            <div class="col-sm-12">
                                <input type="text" class="form-control input-lg" name="username" id="username" placeholder="敢不敢留下姓名！(′▽`〃)">
                                <!--<a href="">注册</a>-->
                            </div>

                        </div>

                        <div class="form-group">

                            <div class="col-sm-12">
                                <input type="email" class="form-control input-lg" name="email" id="email"
                                       placeholder="敢不敢留下邮箱！(′▽`〃)">
                            </div>
                        </div>
                        <?php else: ?>
                        <div>
                            <!--<img style="width: 100px;margin-bottom: 50px" class="center-block img-circle"  src="/Public/images/icon/default.jpg"/>-->
                            <img style="width: 100px;margin-bottom: 50px" class="center-block img-circle" alt="<?php echo ($name); ?>" src="/Public/images/icon/<?php echo ($name); ?>.jpg"
                                 onerror="this.src='/Public/images/icon/default.jpg'"/>
                        </div><?php endif; ?>



                    <div class="form-group">

                        <div class="col-sm-12">
                            <textarea class="form-control input-lg" rows="10" name="content" id="content"
                                required      placeholder="留言<(￣︶￣)/ "></textarea>
                        </div>
                    </div>
                    <div class="control-group submit center">
                        <input class="btn btn-lg btn-primary" type="submit" value="提交">
                    </div>

                </form>

            </div>

        </div>
    </div>
</div>

<!-- CONTACT END -->

<!-- GOING UP ARROW -->

<div class="col-lg-12">
    <div class="up"><a href="#about"><span class="glyphicon glyphicon-chevron-up"></span></a></div>
</div>

<!-- GOING UP ARROW END -->

<!-- SOCIAL MEDIA DIVIDER -->



<!-- SOCIAL MEDIA DIVIDER END -->

<!-- BOTTOM -->

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
<script src="/Public/bootstrapvalidator/js/bootstrapValidator.js"></script>
<script>
    $(document).ready(function() {
        $('#contactForm').bootstrapValidator({
            message: 'This value is not valid',
            //live: 'disabled',
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },

            fields: {
                username: {
                    message: 'The username is not valid',
                    validators: {
                        notEmpty: {
                            message: '用户名不能空着哟(¬д¬。) '
                        },
                        stringLength: {
                            min: 1,
                            max: 30,
                            message: '不能超过30位(¬д¬。) '
                        },

                        regexp: {
                            regexp: /^[a-zA-Z0-9_\.]+$/,
                            message: '用户名不要带特殊字符(¬д¬。) '
                        }
                    }
                },
                email: {
                    message: '邮箱合法哟(¬д¬。)',
                    validators: {
                        notEmpty: {
                            message: '邮箱不能空着哟(¬д¬。) '
                        }
                    }
                },
                content: {
                    message: '不能为空',
                    validators: {
                        notEmpty: {
                            message: '内容不能空着哟(¬д¬。) '
                        },
                        stringLength: {
                            min: 5,
                            message: '太抠了5个字都没写够(¬д¬。) '
                        }
                    }
                }
            }
        });
    });


</script>
<script>
    var MONTHS = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

    var randomScalingFactor = function() {
        return Math.round(Math.random() * 100);
        //return 0;
    };
    var randomColorFactor = function() {
        return Math.round(Math.random() * 255);
    };
    var randomColor = function(opacity) {
        return 'rgba(' + randomColorFactor() + ',' + randomColorFactor() + ',' + randomColorFactor() + ',' + (opacity || '.3') + ')';
    };

    var config = {
        type: 'line',
        data: {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [{
                label: "访问量统计",
                data: [24, 56,564, 7, 56, 99, 2],
                // fill: false,
                //borderDash: [5, 5],
            }]
        },
        options: {
            responsive: true,
            title:{
                display:true,
                text:'访问量统计'
            },
            tooltips: {
                mode: 'label',
                callbacks: {

                }
            },
            hover: {
                mode: 'dataset'
            },
            scales: {
                xAxes: [{
                    display: true,
                    scaleLabel: {
                        show: true,
                        labelString: 'Month'
                    }
                }],
                yAxes: [{
                    display: true,
                    scaleLabel: {
                        show: true,
                        labelString: 'Value'
                    },
                    ticks: {
                        suggestedMin: 0,//负数代表-y
                        suggestedMax: 250,
                    }
                }]
            }
        }
    };

    $.each(config.data.datasets, function(i, dataset) {
        dataset.borderColor = randomColor(0.4);
        dataset.backgroundColor = randomColor(0.5);
        dataset.pointBorderColor = randomColor(0.7);
        dataset.pointBackgroundColor = randomColor(0.5);
        dataset.pointBorderWidth = 1;
    });

    window.onload = function() {
        var ctx = document.getElementById("canvas").getContext("2d");
        window.myLine = new Chart(ctx, config);
//        console.log(config.data.datasets.data);
        console.log(config.data.labels);
    };



</script>

</body>
</html>