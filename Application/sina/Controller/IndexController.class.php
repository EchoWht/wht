<?php
namespace Sina\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
//        dump($_SESSION);
        echo '<hr>';
        $user_message=getUserInfoBySinaId($_SESSION['sina_id']);
//        dump($user_message);
        echo '<hr>';
        vendor('Sina.Sina');
        $c=new \SaeTClientV2(C('WB_AKEY'),C('WB_SKEY') ,$_SESSION['token']['access_token'] );
        $ms  = $c->home_timeline();
        $this->assign('user_message',$user_message);
        $this->assign('ms',$ms['statuses']);
        $this->display();
    }
    public function send(){
        $message=sendSinaText($_REQUEST['text']);
        $this->ajaxReturn($message);
    }
}