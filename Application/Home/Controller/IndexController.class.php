<?php
namespace Home\Controller;

use Think\Controller;

//class IndexController extends \Think\Controller
class IndexController extends Controller
{
    public function index()
    {
        $countnote=count_num('Note');
        $countblog=count_num('Blog');
        $countuser=count_num('User');
        $name=session('name');

        $this->assign('countnote',$countnote);
        $this->assign('countblog',$countblog);
        $this->assign('countuser',$countuser);
        $this->assign('name',$name);
        $this->display();
        vistor_log('Home');
    }
    public function download(){
        echo('····');
    }
    public function newstyle(){
        $this->display();
    }
    public function donate(){
        $this->display();
    }

}