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
                    'title' => "Hello",
                    'content' => 'Hello World'
                ),
                array(
                    'id' => 2,
                    'username' => 'Blskye',
                    'title' => "你好",
                    'content' => '你好世界'
                )
            )
        );
        $this->ajaxReturn($arr);
    }


    /*
     *
     *测试数据
     *
     */
    public function artPost(){
        $key=$_POST['key'];
        $arr=array();
        if ($key==1){
            $arr = array(
                'result' => 1,
                "returndata" => array(
                    array(
                        'id' => 1,
                        'username' => 'Blskye',
                        'title' => "Hello",
                        'content' => 'Hello World'
                    ),
                    array(
                        'id' => 2,
                        'username' => 'Blskye',
                        'title' => "你好",
                        'content' => '你好世界'
                    ),
                    array(
                        'id'=>3,
                        'username'=>"Wanghaotian",
                        'title'=>'怎么样',
                        'content'=>'挺好'
                    )

                )
            );
        }else{
            $arr = array(
                'result' => 0
            );
        }

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




    public function drinkPost(){
        $key=$_POST['key'];
        $arr=array();
        if ($key==1){
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

        }else{
            $arr = array(
                'result' => 0
            );
        }

        $this->ajaxReturn($arr);
    }
}