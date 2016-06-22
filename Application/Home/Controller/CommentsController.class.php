<?php
/**
 * Created by PhpStorm.
 * User: Echowht
 * Date: 2016/3/2
 * Time: 21:26
 */

namespace Home\Controller;
use Think\Controller;

class CommentsController extends Controller
{
    public function index(){

    }
    public function post_comments(){
        $name = session('name');
        $this->assign('name', $name);
        if (!session('name')){
            $this->success('您还没有登录', U('/Login/Index'));
            exit();
        }
        $comment=array(
            'username'  =>  I('session.name'),
            'comment_id'  =>  I('post.comment_id',null),
            'tousername'=>I('post.tousername',null),
            'commentstime'   =>  date("Y-m-d H:i:s"),
            'pageid'=>  $_POST['pageid'],
            'pagetype'=>  I('post.pagetype'),
            'comments'=>I('post.comments')
        );
        if ($comment['comments']==''){
            $this->success('别忘了填写内容');
            exit;
        }
        $Comments=M('Comments');
        $result=$Comments->add($comment);
        if($result){
            $this->success('发表成功');
        }else{
            $this->error('发表失败');
        }
    }
}