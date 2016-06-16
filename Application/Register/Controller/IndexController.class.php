<?php
namespace Register\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $User = M('User');
        $myuser=$User->select();

//        生成注册的action地址
        $register=U('Index/registerUser') ;
        $this->assign('register',$register);
	
        $this->display();
    }
	//用户注册
    public function registerUser(){
//		表单提交的信息打包成数组，并进行过滤
		$user=array(
			'username'=>I('post.username',0),
			'email'=>I('post.email',0),
			'passwd'=>md5(I('post.password',0)),
			'registertime'=> date("Y-m-d H:i:s")
		);
		
		$passwd2=md5(I('post.password2',0));
		if($user['username']==''){
			echo 'username is null<br>';
		}
		if($user['email']==''){
			echo 'email is null<br>';
		}
		if($user['passwd']!=$passwd2){
			echo'no equal<br>';		
		}
		$User = M("User"); // 实例化User对象
		//判断用户名是否存在
		$username = $User->where('username="'.$user['username'].'"')->getField('username');
//		dump($username);
		if($username==null){			
			$result=$User->add($user);
			if($result){
				session('name',$user['username']);
				$this->success('注册成功', U('/Home/Index/index'));
			}else{
				echo'sorry';
			}	
		}else{
			echo'username have';
		}
    }
	private function uploadIco(){
		echo('helo');
	}
	public function isUser(){
		$valid = true;
		$user=array(
			'username'=>I('post.username',0),
			'passwd'=>md5(I('post.passwd',0))
		);
		$User = M("User"); // 实例化User对象
		// 查找用户是否存在
		$username = $User->where('username="'.$user['username'].'"')->getField('username');
		if($username==null){
//			echo 'no user';
			$valid = true;
		}else{
			$valid = false;
		}
		echo json_encode(array(
			'valid' => $valid,
		));
	}


}