<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
	<script src="/Public/ckeditor/ckeditor.js"></script>
</head>
<body>
		<h1>写</h1>
		
		<form id="addblog" method="post" action="<?php echo U('index/addBlog');?>">
			标题：<input type="text" name="arttitle" id="arttitle" />
			<select name="classification" id="classification">
							<option>
								web前端
							</option>
							<option>
								Java
							</option>
							<option>
								PHP
							</option>
							<option>
								SQL
							</option>
							<option>
								文学
							</option>
							<option>
								历史
							</option>
							<option>
								其他
							</option>
			</select>
			<textarea rows="30" cols="50" name="artcontent">Hello World.</textarea>							
			<script type="text/javascript">CKEDITOR.replace('artcontent');</script>
			<button type="submit">
				发表
			</button>
		</form>
</body>
</html>