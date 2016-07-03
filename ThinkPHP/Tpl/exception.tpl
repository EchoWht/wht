<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>出错啦!!!</title>
    <style>
        html {
            font-family: sans-serif;
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
        }
        .errorimage{
            margin: 0 auto;
            display: block;
            max-width: 60px;
            margin-top:60px ;
            }
        .title{
            display: block;
            text-align: center;
        }
        .back{
            display: block;
            text-align: center;
        }
    </style>
</head>
<body>


        <img class="errorimage"  src="/Public/images/404.png">
        <h1 class="title">404</h1>
        <a class="back" href="<?php echo 'http://'.$_SERVER['SERVER_NAME']?>">Back</a>
</body>
</html>