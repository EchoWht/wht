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
    public function drink(){
        $arr = array(
            'result' => 1,
            "returndata" => array(
                array(
                    'id' => 1,
                    'drinkname' => '咖啡',
                    'price' => 12,
                    'pic'=>'coffee'
                ),
                array(
                    'id' => 2,
                    'drinkname' => '橙汁',
                    'price' => 12,
                    'pic'=>'orange'
                ),
                array(
                    'id' => 3,
                    'drinkname' => '苹果汁',
                    'price' => 10,
                    'pic'=>'apple'
                ),
                array(
                    'id' => 4,
                    'drinkname' => '葡萄汁',
                    'price' => 11,
                    'pic'=>'grape'
                ),
            )
        );
        $this->ajaxReturn($arr);
    }
}