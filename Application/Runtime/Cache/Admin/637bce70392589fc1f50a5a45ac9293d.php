<?php if (!defined('THINK_PATH')) exit();?><h1 style="color: #008000;">Green</h1> 

<p><?php echo ($name); ?></p>
<a href="<?php echo U('index',array('t'=>'default'));?>">Default</a>
<a href="<?php echo U('index',array('t'=>'green'));?>">Green</a>
<p><?php echo ((isset($mobile) && ($mobile !== ""))?($mobile):"木有啊"); ?></p>
<p>项目目录：<?php echo ($_SERVER['DOCUMENT_ROOT']); ?></p>

<nav>这是一个公共的导航栏</nav>