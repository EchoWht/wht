<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title>登录</title>

    <link rel="stylesheet" href="/Public/bootstrap/css/bootstrap.min.css"/>

    <link href="/Public/bootstrapvalidator/css/bootstrapValidator.css" type="text/css">
    <script src="/Public/bootstrap/js/jquery.min.js"></script>
    <script src="/Public/bootstrap/js/bootstrap.min.js"></script>
    <script src="/Public/bootstrapvalidator/js/bootstrapValidator.js"></script>
</head>
<body>
<div class="container">
    <div class="row">
        <!-- form: -->
        <section>
            <div class="col-lg-8 col-lg-offset-2">
                <div class="page-header">
                    <h2>登录</h2>
                </div>

                <form id="defaultForm" method="post" class="form-horizontal" action="<?php echo U('Login/Index/login');?>">
                    <div class="alert alert-success" style="display: none;"></div>

                    <div class="form-group">
                        <label class="col-lg-3 control-label">用户名</label>
                        <div class="col-lg-5">
                            <input type="text" class="form-control" name="username" />
                        </div>
                    </div>

                    <!--<div class="form-group">-->
                        <!--<label class="col-lg-3 control-label">Email address</label>-->
                        <!--<div class="col-lg-5">-->
                            <!--<input type="text" class="form-control" name="email" />-->
                        <!--</div>-->
                    <!--</div>-->

                    <div class="form-group">
                        <label class="col-lg-3 control-label">密码</label>
                        <div class="col-lg-5">
                            <input type="password" class="form-control" name="passwd" />
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-lg-5 col-lg-offset-3">
                            <button style="width:100%;" type="submit" class="btn btn-primary">登录</button>
                        </div>

                    </div>

                </form>
                <hr>
                <div class="col-lg-3">
                   <span>其他登录方式：</span>
                </div>
                <div class="col-lg-5">
                    <a href="/sina/wblogin.php"><img src="/Public/images/sina/login.png"/></a>
                </div>
            </div>
        </section>
        <!-- :form -->
    </div>
</div>

<script type="text/javascript">
    var actionurl=document.getElementById("defaultForm").action;
    var usernameurl='http://'+window.location.host+'/index.php/Login/Index/isUser';
    var passwordurl='http://'+window.location.host+'/index.php/Login/Index/isPassword';
    console.log(usernameurl);
    $(document).ready(function() {
        $('#defaultForm').bootstrapValidator({
            message: 'This value is not valid',
            //live: 'disabled',
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            submitHandler: function(validator, form, submitButton) {
                $.post(form.attr('action'), form.serialize(), function(result) {
                    // The result is a JSON formatted by your back-end
                    // I assume the format is as following:
                    //  {
                    //      valid: true,          // false if the account is not found
                    //      username: 'Username', // null if the account is not found
                    //  }
//                    alert(result.valid);
                    if (result.valid == true || result.valid == 'true') {
                        // You can reload the current location
                        window.location.href="http://"+window.location.host;

                        // Or use Javascript to update your page, such as showing the account name
                        // $('#welcome').html('Hello ' + result.username);
                    } else  {
                        // The account is not found
                        // Show the errors
                        form.find('.alert').html('帐号或密码错误').show();

                        // Enable the submit buttons
                        $('#loginForm').bootstrapValidator('disableSubmitButtons', false);
                    }
                }, 'json');
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
                        remote: {
                            url: usernameurl,
                            message: '找不到该用户(=′∇`=）'
                        },
                        regexp: {
                            regexp: /^[a-zA-Z0-9_\.]+$/,
                            message: '用户名不要带特殊字符(¬д¬。) '
                        }
                    }
                },

                passwd: {
                    validators: {
                        notEmpty: {
                            message: '密码不能为空哟(¬д¬。) '
                        },
                        stringLength: {
                            min: 6,
                            max: 30,
                            message: '密码在6-30位之间(¬д¬。) '
                        }
                    }
                }
            }
        });
    });
</script>
</body>
</html>