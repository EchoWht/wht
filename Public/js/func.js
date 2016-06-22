/*document.getElementById*/
//提示框信息
var info=document.getElementById("info");
//提示框右按钮
var tipok=document.getElementById("tipok");
//提示框左按钮
var tipcancel=document.getElementById("tipcancel");
//提示框脚
var maintipfoot=document.getElementById("maintip-foot");

/*document.getElementById*/









function showA() {
	var panel = document.getElementsByClassName("panel");
	for (var i = 0; i < panel.length; i++) {
		if (panel[i].hover != true) {
			//			panel[i].style.csstext
		}
	}
}
showA();

function ajax(url, postStr, onsuccess) {
	var xmlhttp = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
	xmlhttp.open("POST", url, true);
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4) {
			if (xmlhttp.status == 200) {
				onsuccess(xmlhttp.responseText);
			} else {
				alert("AJAX服务器返回错误！");
			}
		}
	}
	xmlhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
	xmlhttp.send(postStr);
}
//链接点击数
function addnoteclick(noteid) {
	var postStr = "noteid=" + noteid;
	ajax("func/addnoteclick.php", postStr, function(result) {
		//		      document.getElementById("info").innerHTML=result;                

	});
}
//判断是否是链接
function IsURL(str_url) {
	var strRegex = "^((https|http|ftp|rtsp|mms)?://)" + "?(([0-9a-z_!~*'().&=+$%-]+: )?[0-9a-z_!~*'().&=+$%-]+@)?" //ftp的user@
		+ "(([0-9]{1,3}\.){3}[0-9]{1,3}" // IP形式的URL- 199.194.52.184
		+ "|" // 允许IP和DOMAIN（域名）
		+ "([0-9a-z_!~*'()-]+\.)*" // 域名- www.
		+ "([0-9a-z][0-9a-z-]{0,61})?[0-9a-z]\." // 二级域名
		+ "[a-z]{2,6})" // first level domain- .com or .museum
		+ "(:[0-9]{1,4})?" // 端口- :80
		+ "((/?)|" // a slash isn't required if there is no file name
		+ "(/[0-9a-z_!~*'().;?:@&=+$,%#-]+)+/?)$";
	var re = new RegExp(strRegex);
	//re.test()
	if (re.test(str_url)) {
		return true;
	} else {
		document.getElementById("addinfo").innerHTML = '不是合法的url';
		return false;
	}
}
//增加链接
function addNote() {
	var noteurl = document.getElementById("noteurl").value;
	var noteremark1 = document.getElementById("noteremark1").value;
	var notecontent = document.getElementById("notecontent").value;
	var addNoteForm=document.getElementById("addNoteForm").action;
	if (noteremark1 == '其他') {
		noteremark1 = 'other';
	}
	if (IsURL(noteurl)) {
		//		document.getElementById("addinfo").innerHTML='ok';
		var postStr = "noteurl=" + noteurl + "&noteremark1=" + noteremark1 + "&notecontent=" + notecontent;
		ajax(addNoteForm, postStr, function(result) {
			document.getElementById("addinfo").innerHTML = result;
				if(result=='ok'){
					$('#myModal').modal('hide');
					//f5
					location.reload();
				}
		});
	}
}
//删除链接
function deleteNote(noteid) {
	info.innerHTML = "壮士，三思而后行啊！";
	tipok.innerHTML="删除";
	tipcancel.innerHTML="取消";
	$("#mask").show();
	$("#maintip").show();
	$("#maintip-foot").show();
	tipok.onclick = function() {
		var postStr = "noteid=" + noteid;
		ajax("/index.php/Note/Index/deletNote.shtml", postStr, function(result) {
			info.innerHTML = result;
			if(result=='ok'){
					$("#mask").hide();
					$("#maintip").hide();
					//f5
					location.reload();
				}
			
		});
	}
}
//删除Blog
function deleteBlog(artid) {
	info.innerHTML = "壮士，三思而后行啊！";
	tipok.innerHTML="删除";
	tipcancel.innerHTML="取消";
	$("#mask").show();
	$("#maintip").show();
	$("#maintip-foot").show();
	tipok.onclick = function() {
		var postStr = "artid=" + artid;
		ajax("/index.php/Blog/Index/delBlog.shtml", postStr, function(result) {
			info.innerHTML = result;
			if(result=='ok'){
				$("#mask").hide();
				$("#maintip").hide();
				//回到主页面
				location.href="index";
			}

		});
	}
}
//更改链接
function updateNoteTip(noteid, noteremark1) {
//	info.innerHTML = "已保存";
	$("#maintip-foot").hide();
	//	var notetip=document.getElementById("notetip").value;
	var postStr = "noteid=" + noteid + "&noteremark1=" + noteremark1;
	ajax("/index.php/Note/Index/updateNoteTip.shtml", postStr, function(result) {
		if(result=='ok'){
			info.innerHTML = "已保存";
			$("#mask").show();
			$("#maintip").fadeIn();
			$("#mask").fadeOut("slow");
			$("#maintip").fadeOut(2000);
		
		}
	});
}
function updateNoteContent(noteid, notecontent) {
	$("#maintip-foot").hide();
	//	var notetip=document.getElementById("notetip").value;
	var postStr = "noteid=" + noteid + "&notecontent=" + notecontent;
	ajax("/index.php/Note/Index/updateNoteContent.shtml", postStr, function(result) {
		if(result=='ok'){
			info.innerHTML = "已保存";
			$("#mask").show();
			$("#maintip").fadeIn();
			$("#mask").fadeOut("slow");
			$("#maintip").fadeOut(2000);
		}
		
	});
}
////删除blog
//function deleteBlog(artid) {
//	$("#mask").show();
//	$("#maintip").show();
//	var delblog = document.getElementById("delblog");
////	var notip=document.getElementById("notip");
//	delblog.onclick = function() {
////		notip.stylesheet.cssText='display:none';
//		var postStr = "artid=" + artid;
//		ajax("func/delblog.php", postStr, function(result) {
//			document.getElementById("delinfo").innerHTML = result;
//			setTimeout('notipmain()',2000);
//			setTimeout('wlBlog()',2000);
//
//		});
//	}
//}
function wlBlog(){
		window.location.href='blog.php';
		}
//隐藏提示框
function notipmain() {
	$("#mask").hide();
	$("#maintip").hide();
}

//显示提示框
function showtipmain() {
	$("#mask").show();
	$("#maintip").show();
}
//登录
function validation() {
	var name = document.getElementById("username").value;
	var pwd = document.getElementById("passwd").value;
	if (name == "") {
		info.innerHTML = "用户名不能为空";
		return false;
	}
	var postStr = "username=" + name + "&passwd=" + pwd;
	ajax("/login.php/Index/login.html", postStr, function(result) {
		
	});
}
function _b()
    {
        if(event.keyCode ==13){ //如果enter键按下则执行提交函数
        validation();
                    }
    }
    function jumpPage()
    {
//      var info=info.innerHTML;
//      if (info==''){
        		location.href='../note.php';
//      }
    }
  //注册
  function validationRegister()
    {
        var name = document.getElementById("username").value;
        var email = document.getElementById("email").value;
        var pwd = document.getElementById("pwd").value;
        var pwd2 = document.getElementById("pwd2").value;
        if(name==""){
            info.innerHTML="用户名不能为空";	
			document.getElementById("username").focus();
            return false;
        }
		 if(email==""){
            info.innerHTML="邮箱不能为空";	
			document.getElementById("email").focus();
            return false;
        }
		 if(pwd==""){
            info.innerHTML="密码不能为空";	
			document.getElementById("pwd").focus();
            return false;
        }
		 if(pwd!=pwd2){
            info.innerHTML="输入的两次密码不相同";	
			document.getElementById("pwd").focus();
            return false;
        }
        var postStr = "username="+name+"&email="+email+"&pwd="+pwd+"&pwd2="+pwd2;
        ajax("func/register.php",postStr,function(result){
        info.innerHTML=result;                
        setTimeout('jumpMyhome()',100)
        });                        
    }
function _c()
    {
        if(event.keyCode ==13){ //如果enter键按下则执行提交函数
        validationRegister();
                    }
    }
function setIcon() {
	var dataInfo=document.getElementById('data-info');
	var setIconHref=document.getElementById('setIconHref').value;
	var postStr="";
	ajax(setIconHref,postStr,function(result){
		dataInfo.innerHTML=result;
	});
	// alert('Hello');
}






//jquery ajax
//1.上传头像
$(document).ready(function(){
	$("#uploadIconButton").click(function(){
		$.ajax({
			type:"POST",
			url: $("#myTest").val(),
			dataType:"json",
			data:{
				test:$("#myTest").val()
			},
			success:function (data) {
				if (data.success){
					$("#data-info").html(data.msg);
				}else {
					$("#data-info").html("出错了："+data.msg);
				}
			},
			error:function (jqXHR) {
				$("#data-info").html("出错了："+jqXHR.status);
			}
		});
	});
});
//修改code样式｛｝
function changeCodeStyle(stylename){
	var codestylecss = document.getElementById('codestylecss');
	codestylecss.href='/Public/highlight/styles/'+stylename+'.css'
	var tocodestyle = document.getElementById('tocodestyle');
	var actionurl = document.getElementById('actionurl');
	tocodestyle.value=stylename;
	var postStr = "tocodestyle="+tocodestyle.value;
	ajax(actionurl.value,postStr,function(result){
		console.log(result);

	});

}

//删除分类
function delcat(id){
	var postStr = "id=" + id;
	ajax("/index.php/User/Set/delCat.shtml", postStr, function(result) {

		if(result=='ok'){
			document.getElementById("span"+id+"").style.cssText='display:none'
		}

	});
}
//根据cat 分类note
function catkey(cat){
	document.getElementById('catword').value=cat;
	document.getElementById('catwordform').submit();
}