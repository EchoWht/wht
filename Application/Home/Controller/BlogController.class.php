<?php
namespace Home\Controller;

use Think\Controller;

//class IndexController extends \Think\Controller
class BlogController extends Controller
{
    public function index()
    {
        $name = session('name');
        $this->assign('name', $name);
        //用户搜索条件
        $condation='';
        if( I('get.keyword')!=null||I('get.keyword')!=''){
            $condation=I('get.keyword');
        }
		$catword='';
		if( I('get.catword')!=null||I('get.catword')!=''){
			$catword=I('get.catword');
		}
        $Blog = M("Blog");
        $count      = $Blog->where('ispublic=1  and artremark1 like "%'.$catword.'%" and (arttitle like "%'.$condation.'%" or artcontent like "%'.$condation.'%")')->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($count,4);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show       = $Page->showB();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $Blog->where('ispublic=1 and artremark1 like "%'.$catword.'%" and (arttitle like "%'.$condation.'%" or artcontent like "%'.$condation.'%") ')->order('artid desc')->limit($Page->firstRow.','.$Page->listRows)->select();

        for($i=0;$i<count($list);$i++){
            $blog_vistor=get_vister_num($list[$i]['artid'],'blog' );
            $list[$i]['blog_vistor']=$blog_vistor ;
        }
        $this->assign('list',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $Cat = M("Cat");
		$cat = $Cat->where('username="' . $name . '"')->select();
		$this->assign('cat', $cat);
        $this->display();
    }
    //    阅读整篇文章
    public function readMore()
    {
        $name = session('name');
        $this->assign('name', $name);
        $blog = array(
            'artid' => I('get.artid', 0)
        );
        $Blog = M("Blog");
        $myblog = $Blog->where('artid=' . $blog['artid'] . ' AND ispublic=1')->select();
        if(empty($myblog)){
            $this->error('没有这篇文章！',U('/Blog/Index/'));
        }
        /*记录访问*/
        mode_vistor_log($blog['artid'], 'blog');
        /*统计访问*/
        $blog_vistor=get_vister_num($blog['artid'], 'blog');
        $this->assign('myblog', $myblog);
        $this->assign('blog_vistor', $blog_vistor);
        $this->display();
    }
}