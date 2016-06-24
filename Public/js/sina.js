/**
 * Created by Administrator on 2016-06-24.
 *
 */
var host="http://"+window.location.host;
$("#inp-username").blur(
    function () {
        var username=$("#inp-username").val();
        if (username==''){
            $(".alert").html("不能为空").show()
            $("#inp-username").focus();
            return
        }
        $.ajax({
            type:'get',
            url:host+'/index.php/User/Set/user',
            data:{
                username:username,
            },
            success:function(result){
                if(result==100) {
                    $(".alert").html("妥了，还没有人用这个用户名").show()
                    $("#passwd").hide();
                    $("#email").fadeIn();
                    $("#step_one").removeClass('disabled')
                }else if (result==1){
                    $("#email").hide();
                    $("#passwd").hide();
                    $(".alert").html("这个用户已经绑定了,请换个用户名试试").fadeIn()
                }else if(result==0){
                    $("#email").hide();
                    $(".alert").html("有该用户,请填写密码").fadeIn()
                    $("#passwd").fadeIn();
                    // $("#step_one").hide();
                    // $("#step_three").show();
                }
            }
        });

    }
)
$("#inp-email").blur(
    function () {
        var email=$("#inp-email").val();
        if (email==''){
            $(".alert").html("不能为空").show()
            $("#inp-email").focus();
            return
        }
        $.ajax({
            type:'get',
            url:host+'/index.php/User/Set/email',
            data:{
                email:email,
            },
            success:function(result){
                if (result==1){
                    $(".alert").html("这个email已经绑定了,请换个").fadeIn()
                }else if(result==0){
                    $(".alert").html("email Ok").fadeIn()
                    $("#passwd").fadeIn();
                }
            }
        }); 
    }
)