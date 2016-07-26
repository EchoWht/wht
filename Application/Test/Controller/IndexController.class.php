<?php
namespace Test\Controller;

use Think\Controller;

class IndexController extends Controller
{
    public function index()
    {
        $arr = array(
            'result' => 1,
            "returndata" => array(
                array(
                    'id' => 1,
                    'username' => 'Blskye',
                    'title' => "Hello World",
                    'content' => 'Hello !!!!!!'
                ),
                array(
                    'id' => 2,
                    'username' => 'Blskye',
                    'title' => "Hello World",
                    'content' => 'Hello !!!!!!'
                )
            )
        );
        $this->ajaxReturn($arr);
    }
}