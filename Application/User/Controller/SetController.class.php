<?php
/**
 * Created by PhpStorm.
 * User: Echowht
 * Date: 2016/5/1
 * Time: 23:59
 */

namespace User\Controller;

use Think\Controller;


class SetController extends Controller
{
    public function index()
    {
        $name = session('name');
        if (!isset($name)) {
            $this->success('您还没有登录', U('../../login.php/Index'));
            exit;
        }
        $this->assign('name', $name);
        $this->display();
    }

    public function setcodestyle()
    {
        $name = session('name');
        if (!isset($name)) {
            $this->success('您还没有登录', U('../../login.php/Index'));
            exit;
        }
        $this->assign('name', $name);
        $Codestyle=M('Codestyle');
        $result=$Codestyle->select();
        $this->assign('codestyle',$result);

        $this->display();
    }
    public function setstyle(){
        $name = session('name');
        if (!isset($name)) {
            $this->success('您还没有登录', U('../../login.php/Index'));
            exit;
        }
        $this->assign('name', $name);
        if(I('post.tocodestyle')){
            $User=M('User');
            $data['codestyle']=I('post.tocodestyle');
            $User->where('username="'.session('name').'"')->save($data);
            session('codestyle',I('post.tocodestyle'));
        }
    }
    public function setcat(){
        $name = session('name');
        if (!isset($name)) {
            $this->success('您还没有登录', U('../../login.php/Index'));
            exit;
        }
        $this->assign('name', $name);

        $Cat=M('Cat');
        $list=$Cat->where('username="'.$name.'"')->select();
//        dump($list);
        $this->assign('list', $list);
        $this->display();
    }
    public function addcat(){
        $name = session('name');
        if (!isset($name)) {
            $this->success('您还没有登录', U('../../login.php/Index'));
            exit;
        }
        $this->assign('name', $name);
        if (!session(name)){
            $this->success('您还没有登录', U('/Login/Index'));
            exit();
        }
        $cat=array(
            'username'  =>  I('session.name'),
            'catname'  =>  I('post.catname'),
        );
//        dump($blog);

        if ($cat['catname']==''){
            $this->success('别忘了填写分类名');
            exit;
        }

        //dump($blog);
        $Cat=M('Cat');
        $result=$Cat->add($cat);
        if($result){
            $this->success('添加成功', U('/User/Set/setcat'));
        }else{
            $this->error('添加失败');
        }
        $this->display();
    }
    //    删除cat
    public function delCat(){
        $name = session('name');
        if (!isset($name)) {
            $this->success('您还没有登录', U('../../login.php/Index'));
            exit;
        }
        $this->assign('name', $name);
        $catid=I('post.id');
        $username=I('session.name');
        $Cat = M("Cat");
//			$result=$Note->delete($noteid);
        $result=$Cat->where('username="'.$username.'"')->delete($catid);
        if($result){
            echo'ok';
        }else{
            echo'no';
        }
    }
    /*sina绑定用户*/
    public function sinabounduser(){

//        if (isBoundUserBySina($_SESSION['sina_id'])==0){
//
//        }else{
//            $this->success('走你~', '/index.php/');
//        }
        $this->display();
    }
    /*sina绑定邮箱*/
    public function sinaboundemail(){
        $username=I("get.username",0);
        $message="";
        if(issetusername($username)==0){
            //妥了，还没有人用这个用户名，就这个了？
            $message=100;
        }else{
//           if(isUserBoundSina($username)){
////                已绑定微博
//           }else{
////               输入密码并绑定
//           }
            $message=isUserBoundSina($username);
        }
        $this->ajaxReturn($message);
    }

}