<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<form action="<?php echo ($register); ?>" method="post">
	用户名：
    <input value="" name="username"/>
    电子邮箱：
    <input value="" name="email"/>
    密码：
    <input value="" name="password"/>
    确认密码：
    <input value="" name="password2"/>
    <button>注册</button>
</form>

</body>
</html>