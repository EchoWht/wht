<?php
return array(
    //'配置项'=>'配置值'
    'URL_CASE_INSENSITIVE' =>true,//兼容url大小写
    'URL_HTML_SUFFIX' => 'shtml',
    'DEFAULT_THEME' => 'default',
    'TMPL_DETECT_THEME' => true,
    'THEME_LIST' => 'default,green',

//   微博配置
    'WB_AKEY'=>'3220522863',
    'WB_SKEY'=>'33e08ee1f683ff6e4e054f8d9a275044',
    'WB_CALLBACK_URL'=>'http://blskye.com/index.php/Login/Index/callback',

//    邮箱配置
    'SMTPSERVER' => 'smtp.blskye.com',//SMTP服务器
    'SMTPSERVERPORT' =>25,//SMTP服务器端口
    'SMTPUSERMAIL' => 'wht@blskye.com',//SMTP服务器的用户邮箱
    'SMTPUSER' => 'wht@blskye.com',//SMTP服务器的用户帐号
    'SMTPPASS' => 'shinecho1234.',//SMTP服务器的用户密码
);
