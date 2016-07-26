<?php
namespace Test\Controller;

use Think\Controller;

class IndexController extends Controller
{
    public function index()
    {
        $arr = array(
            'result'=>1,
            array(
<<<<<<< HEAD
                'id' => 1,
                'usename' => 'Blskye',
                'title' => "Hello World",
                'content' => 'Hello !!!!!!'
            ),
            array(
                'id' => 2,
                'usename' => 'Blskye',
                'title' => "Hello World",
                'content' => 'Hello !!!!!!'
=======
                'id'=>1,
                'username'=>'Blskye',
                'title'=>"Hello World",
                'content'=>'Hello !!!!!!'
            ),
            array(
                'id'=>2,
                'username'=>'Blskye',
                'title'=>"Hello World",
                'content'=>'Hello !!!!!!'
>>>>>>> d1995ea1d3dd9f2c162deab6e6602956c37cbd3b
            ),
        );
        $this->ajaxReturn($arr);
    }
}