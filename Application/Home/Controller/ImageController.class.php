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
    //���������Blog������ͼ
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
    //���������Note������ͼ
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
    //���������User������ͼ
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