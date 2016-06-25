<?php
namespace Login\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
	  	 $login=U('Index/login') ;		 
		 $this->assign('login',$login);
		$this->display();
    }
	public function login(){
		$valid = true;
		$user=array(
			'username'=>I('post.username',0),
			'passwd'=>md5(I('post.passwd',0))
		);
		$User = M("User"); // 实例化User对象
		// 查找用户是否存在
			$username = $User->where('username="'.$user['username'].'"')->getField('username');
		if($username==null){
			$valid = 'nouser';
//			exit;
		}else{
			$result= $User->where('username="'.$user['username'].'" AND passwd="'.$user['passwd'].'"')->find();
			if($result==null){
				$valid = 'error';
			}
			else{
				$User->lastlogintime = date("Y-m-d H:i:s");
				$User->where('username="'.$user['username'].'"')->save();
				session('name',$user['username']);
//				获取用户代码样式
				session('codestyle',$result['codestyle']);
//				session('codestyle',)
				if($result){

					$valid = true;
				} else {
					$valid = 'error';
				}
			}
		}
		echo json_encode(array(
		'valid' => $valid,
		));
	}
//public function login(){
//	echo json_encode(array(
//		'valid' => false,
//	));
//}
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
			$valid = false;
		}else{
			$valid = true;
		}
		echo json_encode(array(
			'valid' => $valid,
		));
	}
	public function signout(){
		session_destroy();
		$this->success('你已退出登录····',U('/'));
	}

	public function sina(){
		echo "Hi Sina";
		vendor('Sina.Sina');
		$o= new \SaeTOAuthV2(C('WB_AKEY'),C('WB_SKEY'));
		$oauth=$o->getAuthorizeURL(C('WB_CALLBACK_URL'));
		header('Location:'.$oauth);
	}
	public function callback(){
		vendor('Sina.Sina');
		$o= new \SaeTOAuthV2(C('WB_AKEY'),C('WB_SKEY'));
		if (isset($_REQUEST['code'])) {
			$keys = array();
			$keys['code'] = $_REQUEST['code'];
			$keys['redirect_uri'] = C('WB_CALLBACK_URL');
			try {
				$token = $o->getAccessToken('code', $keys);
			} catch (OAuthException $e) {
			}
		}
		if ($token) {
			$_SESSION['token'] = $token;
			setcookie('weibojs_' . $o->client_id, http_build_query($token));
			$sina_id=getSinauserId();

			isBoundUserBySina($sina_id);
			if (isBoundUserBySina($sina_id)==0){
				$_SESSION['sina_id']=$sina_id;
				$this->success('通过微博登录成功', '/index.php/User/Set/sinabounduser');
			}else{
				$_SESSION['name']=isBoundUserBySina($sina_id)['username'];
				dump($_SESSION);
			}
//			$this->success('通过微博登录成功', '/index.php/User/Index/user');
		} else {
			dump("Error");
		}
	}

}