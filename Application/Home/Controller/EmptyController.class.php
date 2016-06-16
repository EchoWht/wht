<?php
/**
 * Created by PhpStorm.
 * User: Echowht
 * Date: 2016/3/2
 * Time: 21:26
 */

namespace Home\Controller;
use Think\Controller;

class EmptyController extends Controller
{
    public function _empty(){
        echo"这页不存在404";
    }
}