<?php
namespace Message\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    }
    public function message(){
        $message=array(
            'username'=>'',
            'email'=>'',
            'content'=>I('post.content'),
            'messtime'=>date("Y-m-d H:i:s"),
            'userstate'=>'',
            'userip'=>get_client_ip()
        );
        if (I('post.content')==null||I('post.content')==""){
            exit('请先填写留言内容');
        }
        $name = session('name');
        if (!isset($name)) {
            $message['username']=I('post.username','匿名用户');
            $message['email']=I('post.email',0);
            $message['userstate']=0;
        }else{
            $message['username']=$name;
            $User = M("User"); // 实例化User对象
            // 查找用户email
            $email = $User->where('username="'.$name.'"')->getField('email');
            $message['email']=$email;
            $message['userstate']=1;
        }
        $Message=M('Message');
        $result=$Message->add($message);
        if($result){
            $this->success('留言成功，我会第一时间通过邮件回复');
        }else{
            $this->error('留言失败');
        }

    }
}