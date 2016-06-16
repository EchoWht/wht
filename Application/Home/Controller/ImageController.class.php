<?php
/**
 * Created by PhpStorm.
 * User: Echowht
 * Date: 2016/4/18
 * Time: 21:08
 */

namespace Home\Controller;
use Think\Controller;

//class IndexController extends \Think\Controller
class ImageController extends Controller
{
    public function index(){

    }
    //最近几个月Blog的折线图
    public function graph_blog(){
        $Blog = M('Blog');
        $ydata=array();
        $xdata=getForwordMonth(5);

        for($i=0;$i<count($xdata);$i++){
            $ydata[]=$Blog->where('artdate like "%'.$xdata[$i].'%"')->count();
        }
        //dump($xdata);
        jpZx($ydata,$xdata,'Blog','#CC3333');
    }
    //最近几个月Note的折线图
    public function graph_note(){
        $Note = M('Note');
        $ydata=array();
        $xdata=getForwordMonth(5);

        for($i=0;$i<count($xdata);$i++){
            $ydata[]=$Note->where('notedate like "%'.$xdata[$i].'%"')->count();
        }
        //dump($xdata);
        jpZx($ydata,$xdata,'Note','#000000');
    }
    //最近几个月User的折线图
    public function graph_user(){
        $User = M('User');
        $ydata=array();
        $xdata=getForwordMonth(5);

        for($i=0;$i<count($xdata);$i++){
            $ydata[]=$User->where('registertime like "%'.$xdata[$i].'%"')->count();
        }
        //dump($xdata);
        jpZx($ydata,$xdata,'User','#003399');
    }
}