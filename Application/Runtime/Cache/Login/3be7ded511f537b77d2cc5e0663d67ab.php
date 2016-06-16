<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="/Public/favicon.ico">
		<title>Login</title>
		<link href="/Public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="/Public/css/style.css" rel="stylesheet">
		<link href="/Public//css/signin.css" rel="stylesheet">
		<script src="/Public/js/ie-emulation-modes-warning.js"></script>
	</head>

<body>
	<div class="container">
		<form class="form-signin" action="<?php echo ($login); ?>" method="post">
			<h2 class="form-signin-heading">Please sign in</h2>
			<label for="username" class="sr-only">Email address</label>
			<input type="text" id="username" name="username" value="" class="form-control" placeholder="Username" required autofocus>
			<label for="passwd" class="sr-only">Password</label>
			<input type="password" name="passwd" value="" id="passwd" class="form-control" placeholder="Password" required>
			<div class="checkbox">
				<label>
					<input type="checkbox" value="remember-me"> Remember me
				</label>
			</div>
			<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
		</form>
	</div>
</body>

</html>