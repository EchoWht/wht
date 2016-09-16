<?php
namespace Api\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
		header('Access-Control-Allow-Origin: *');
		$user=array(
			'username'=>I('post.username',0),
			'passwd'=>I('post.passwd',0)
		);
//		dump($user);
		$User = M("User"); // 实例化User对象
		// 查找用户是否存在
		$username = $User->where('username="'.$user['username'].'"')->getField('username');
		if($username==null){
			echo '找不到这个用户<hr>';
			exit('右键图标选项，重新登录');
		}else{
			$result= $User->where('username="'.$user['username'].'" AND passwd="'.$user['passwd'].'"')->find();
			if($result==null){
				echo'密码错了哟<hr>';
				exit('右键图标选项，重新登录');
			}
			else{
//				echo'ok';
				$User->lastlogintime = date("Y-m-d H:i:s");
				$User->where('username="'.$user['username'].'"')->save();
				session('name',$user['username']);
				session('codestyle',$result['codestyle']);
				if($result){
					//设置成功
					$this->addNote();
				} else {
					//错误页面
					echo ('出了点小状况0.0,请再试一次');
				}
			}
		}
//		$this->assign('notemsg',);
		$this->display();
    }
	public function login(){
		header('Access-Control-Allow-Origin: *');
		$user=array(
			'username'=>I('post.username',0),
			'passwd'=>I('post.passwd',0)
		);
//		dump($user);
		$User = M("User"); // 实例化User对象
		// 查找用户是否存在
		$username = $User->where('username="'.$user['username'].'"')->getField('username');
		if($username==null){
			exit( '找不到这个用户<hr>');
		}else{
			$result= $User->where('username="'.$user['username'].'" AND passwd="'.$user['passwd'].'"')->find();
			if($result==null){
				exit('密码错了哟<hr>');
			}
			else{
//				echo'ok';
				$User->lastlogintime = date("Y-m-d H:i:s");
				$User->where('username="'.$user['username'].'"')->save();
				session('name',$user['username']);
				session('codestyle',$result['codestyle']);
				if($result){
					echo ('ok');
				} else {
					//错误页面
					exit ('出了点小状况0.0,请再试一次');
				}
			}
		}
	}
	private function addNote(){
		$filename=snapshot(I('post.my_url',0));
		
		$note=array(
			'noteurl'=>I('post.my_url',0),
			'noteremark1'=>'other',
//			'notecontent'=>I('post.notecontent',0),
			'notedate'=> date("Y-m-d H:i:s"),
			'username'=> I('session.name',0),
			'notetitle'=> I('post.url_title',0),
			'notepic'=>$filename
		);
		$Note = M("Note");
		$result=$Note->add($note);
		if($result){
			$notemsg='链接已保存';

		}else{
			$notemsg='链接保存出错了';
		}
		$this->assign('notemsg',$notemsg);
		$this->assign('note',$note);
	}

}