<?php
//ºóÌ¨µÇÂ½
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function index(){
		$this->display();
		    }
	public function verify(){
		$Verify = new \Think\Verify();
		$Verify->entry();
	}
}