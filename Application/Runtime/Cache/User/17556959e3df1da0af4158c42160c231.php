<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo ($user[0][username]); ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/Public/css/style.css">
    <link rel="stylesheet" href="/Public/user/css/normalize.css">
    <link rel="stylesheet" href="/Public/user/css/font-awesome.css">
    <link rel="stylesheet" href="/Public/user/css/bootstrap.min.css">
    <link rel="stylesheet" href="/Public/user/css/templatemo-style.css">
    <link rel="stylesheet" href="/Public/highlight/styles/zenburn.css">
    <link rel="stylesheet" href="/Public/css/default/home.css">

    <script src="/Public/user/js/vendor/modernizr-2.6.2.min.js"></script>
    <script src="/Public/highlight/highlight.pack.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>

</head>
<body>
<!--[if lt IE 7]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->

<div class="responsive-header visible-xs visible-sm">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="top-section">
                    <div class="profile-image">
                        <img src="/Public/images/icon/<?php echo ($user[0][username]); ?>.jpg" alt="<?php echo ($user[0][username]); ?> "
                             onerror="this.src='/Public/images/icon/default.jpg'">
                    </div>
                    <div class="profile-content">
                        <h3 class="profile-title"><?php echo ($user[0][username]); ?></h3>
                        <p class="profile-description">Pro Photography</p>
                    </div>
                </div>
            </div>
        </div>
        <a href="#" class="toggle-menu"><i class="fa fa-bars"></i></a>
        <div class="main-navigation responsive-menu">
            <ul class="navigation">
                <li><a href="#top"><i class="fa fa-home"></i>Home</a></li>
                <li><a href="#Blog"><i class="fa fa-user"></i>About Me</a></li>
                <li><a href="#note"><i class="fa fa-newspaper-o"></i>My Gallery</a></li>
                <li><a href="#contact"><i class="fa fa-envelope"></i>Contact Me</a></li>
            </ul>
        </div>
    </div>
</div>

<!-- SIDEBAR -->
<div class="sidebar-menu hidden-xs hidden-sm">
    <div class="top-section">
        <div class="card1">
            <div class="profile-image">
                <input type="hidden" id="setIconHref" value="<?php echo U('User/Index/setIcon');?>">
                <a href="javascript:void (0)" onclick="setIcon()" title="更换头像"><img
                        src="/Public/images/icon/<?php echo ($user[0][username]); ?>.jpg"
                        alt="<?php echo ($user[0][username]); ?>"
                        onerror="this.src='/Public/images/icon/default.jpg'"/>
                </a>
            </div>
            <h3 class="profile-title"><?php echo ($user[0][username]); ?></h3>
            <p class="profile-description">"Hello World"</p>
            <div class="user-widget-statatistic">
                <ul class="clearfix">
                    <li class="border-red">
                        <div class="text-muted text-upper font-sm">Followers</div>
                        231
                    </li>
                    <li class="border-green">
                        <div class="text-muted text-upper font-sm">Followings</div>
                        712
                    </li>
                    <li class="border-yellow">
                        <div class="text-muted text-upper font-sm">Tweets</div>
                        109
                    </li>
                </ul><!-- ./row -->
            </div>
        </div>

    </div> <!-- top-section -->
    <div class="main-navigation">
        <ul class="navigation">
            <li><a href="#top"><i class="fa fa-home"></i>Home</a></li>
            <li><a href="#Blog"><i class="fa fa-user"></i>My Blog</a></li>
            <li><a href="#note"><i class="fa fa-newspaper-o"></i>My Note</a></li>
            <li><a href="#contact"><i class="fa fa-envelope"></i>Contact Me</a></li>
            <?php if($name == $uname ): ?><li><a href="#"><i class="fa fa-cogs"></i>设置</a></li>
                <?php else: endif; ?>


        </ul>
    </div> <!-- .main-navigation -->
    <div class="social-icons">
        <ul>
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
            <li><a href="#"><i class="fa fa-rss"></i></a></li>
        </ul>
    </div> <!-- .social-icons -->
</div> <!-- .sidebar-menu -->

<div class="copyrights">Collect from <a href="http://www.blskye.com/">Blskye</a></div>

<div class="banner-bg" id="top">
    <div class="banner-overlay"></div>
    <div class="welcome-text">
        <div id="data-info">

        </div>
    </div>
</div>

<!-- MAIN CONTENT -->
<div class="main-content">
    <div class="fluid-container">

        <div class="content-wrapper">

            <!-- ABOUT -->
            <div class="page-section" id="Blog">
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="widget-title">My Blog</h4>

                        <div class="row">
                            <?php if(is_array($blog)): $i = 0; $__LIST__ = $blog;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="col-md-6">
                                    <div class="simple-art">
                                        <div class="simple-art-head">
                                            <h2><?php echo ($vo["arttitle"]); ?></h2>
                                            <h5><em><?php echo ($vo["artdate"]); ?></em></h5>
                                            <hr/>
                                        </div>
                                        <div class="simple-art-body">
                                            <p>
                                                <?php echo ($vo["artcontent"]); ?>
                                            </p>
                                        </div>
                                        <hr/>
                                        <div class="simple-art-foot">
                                            <a href="<?php echo U('Blog/Index/readMore');?>?artid=<?php echo ($vo["artid"]); ?>">阅读更多</a>
                                        </div>
                                    </div>
                                </div><?php endforeach; endif; else: echo "" ;endif; ?>
                        </div>
                        <hr>
                    </div>
                </div> <!-- #about -->
            </div>

            <!-- note -->
            <div class="page-section" id="note">
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="widget-title">My Note</h4>
                        <div class="row">
                            <?php if(is_array($note)): $i = 0; $__LIST__ = $note;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="col-md-3">
                                    <a href="<?php echo ($vo["noteurl"]); ?>" target="_blank">
                                        <?php echo ($vo["notetitle"]); ?>
                                    </a>
                                    <p>
                                        <?php echo ($vo["notecontent"]); ?>
                                    </p>
                                    <span><?php echo ($vo["noteremark1"]); ?></span>
                                </div><?php endforeach; endif; else: echo "" ;endif; ?>
                        </div>
                        <hr>
                    </div>
                </div> <!-- #about -->
            </div>

            <!-- CONTACT -->
            <div class="page-section" id="contact">
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="widget-title">PLACE TO TALK WITH ME</h4>
                        <p>Vestibulum ac iaculis erat, in semper dolor. Maecenas et lorem molestie, maximus justo
                            dignissim, cursus nisl. Nullam at ante quis ex pharetra pulvinar quis id dolor. Integer
                            lorem odio, euismod ut sem sit amet, imperdiet condimentum diam.</p>
                    </div>
                </div>
                <div class="row">
                    <form action="#" method="post" class="contact-form">
                        <fieldset class="col-md-12 col-sm-12">
                            <textarea name="message" id="message" cols="30" rows="6"
                                      placeholder="Leave your message..."></textarea>
                        </fieldset>
                        <fieldset class="col-md-12 col-sm-12">
                            <input type="submit" class="button big default" value="Send Message">
                        </fieldset>
                    </form>
                </div> <!-- .contact-form -->
            </div>
            <hr>

            <div class="row" id="footer">
                <div class="col-md-12 text-center">
                    <p class="copyright-text">Copyright &copy; 2084 Company Name | More Templates <a
                            href="http://www.17sucai.com/" target="_blank" title="17素材网">17素材网</a> - Collect from <a
                            href="http://www.17sucai.com/" title="网页模板" target="_blank">网页模板</a></p>
                </div>
            </div>

        </div>

    </div>
</div>

<script src="/Public/user/js/vendor/jquery-1.10.2.min.js"></script>
<script src="/Public/user/js/min/plugins.min.js"></script>
<script src="/Public/user/js/min/main.min.js"></script>
<script src="/Public/js/func.js"></script>

</body>
</html>