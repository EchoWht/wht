<?php
namespace Sina\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $user_message=getUserInfoBySinaId($_SESSION['sina_id']);
        vendor('Sina.Sina');
        $c=new \SaeTClientV2(C('WB_AKEY'),C('WB_SKEY') ,$_SESSION['token']['access_token'] );
        $ms  = $c->home_timeline();
        $this->assign('user_message',$user_message);
        $this->assign('ms',$ms['statuses']);
        $this->display();
    }
    public function send(){
        if($_REQUEST['pic']==''){
            $message=sendSinaText($_REQUEST['text']);
        }else{
            $message=sendSinaTextPic($_REQUEST['text'],$_REQUEST['pic']);
        }

        $this->ajaxReturn($message);
    }
}