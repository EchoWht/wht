<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<head>
    <meta charset="utf-8"/>
    <title></title>

</head>
<body>
<h1> <?php echo ($loginuser["name"]); ?></h1>
<table border="1px">
    <tr><th>ID</th><th>Name</th></tr>
    <?php if(is_array($myuser)): $i = 0; $__LIST__ = $myuser;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr><td><?php echo ($vo["id"]); ?></td><td><?php echo ($vo["name"]); ?></td></tr><?php endforeach; endif; else: echo "" ;endif; ?>

</table>
</body>