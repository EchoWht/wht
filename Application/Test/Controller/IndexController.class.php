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
            ),
        );
        $this->ajaxReturn($arr);
    }
}