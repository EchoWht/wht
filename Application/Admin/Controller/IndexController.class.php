<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	$name="WangHT";
		$this->assign('name',$name);
//		$this->assign('age',$age);
		// ʵ����Userģ��
		$User = M('User');
		// �������ݺ�д�뵽���ݿ�
		$data['name'] = 'ThinkPHP';
		$User->data($data)->add();

		$this->display();
		    }
}