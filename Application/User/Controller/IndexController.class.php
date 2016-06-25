<?php
namespace User\Controller;

use Think\Controller;

class IndexController extends Controller
{
    public function index()
    {
        $uname = I('get.u');
//        User
        $name = session('name');
        $User = M('User');
        $user = $User->where('username="' . $uname . '"')->select();
        if(!$user){
            $this->error('没有找到这位大神', U('/Home'));
        }
//        Blog
        $Blog = M('Blog');
        $condition['username']=$uname;
        $condition['ispublic']=1;
        $blog = $Blog->where($condition)->order("artid")->limit(6)->select();
//         Note
        $Note = M('Note');
        $note = $Note->where($condition)->order("noteid")->limit(6)->select();

        $this->assign('user', $user);
        $this->assign('uname', $uname);
        $this->assign('blog', $blog);
        $this->assign('note', $note);
        $this->assign('name', $name);
        $this->display();
    }

    public function setIcon()
    {
        $name = session('name');
        $this->assign('name', $name);
        $this->display();
    }

    public function uploadIcon()
    {
        echo('hello');
    }
    public function user(){
        vendor('Sina.Sina');
        $c=new \SaeTClientV2(C('WB_AKEY'),C('WB_SKEY') ,$_SESSION['token']['access_token'] );
        $ms  = $c->home_timeline(); // done
        $uid_get = $c->get_uid();
        $uid = $uid_get['uid'];
        $user_message = $c->show_user_by_id( $uid);//根据ID获取用户等基本信息
//        dump($user_message);
        $this->assign('user_message',$user_message);
        $this->display();
    }
}