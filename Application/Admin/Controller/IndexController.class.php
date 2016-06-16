<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	$name="WangHT";
		$this->assign('name',$name);
//		$this->assign('age',$age);
		// 实例化User模型
		$User = M('User');
		// 创建数据后写入到数据库
		$data['name'] = 'ThinkPHP';
		$User->data($data)->add();

		$this->display();
		    }
}