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
        //�û���������
        $condation='';
        if( I('get.keyword')!=null||I('get.keyword')!=''){
            $condation=I('get.keyword');
        }
		$catword='';
		if( I('get.catword')!=null||I('get.catword')!=''){
			$catword=I('get.catword');
		}
        $Blog = M("Blog");
        $count      = $Blog->where('ispublic=1  and artremark1 like "%'.$catword.'%" and (arttitle like "%'.$condation.'%" or artcontent like "%'.$condation.'%")')->count();// ��ѯ����Ҫ����ܼ�¼��
        $Page       = new \Think\Page($count,4);// ʵ������ҳ�� �����ܼ�¼����ÿҳ��ʾ�ļ�¼��(25)
        $show       = $Page->showB();// ��ҳ��ʾ���
        // ���з�ҳ���ݲ�ѯ ע��limit�����Ĳ���Ҫʹ��Page�������
        $list = $Blog->where('ispublic=1 and artremark1 like "%'.$catword.'%" and (arttitle like "%'.$condation.'%" or artcontent like "%'.$condation.'%") ')->order('artid desc')->limit($Page->firstRow.','.$Page->listRows)->select();

        for($i=0;$i<count($list);$i++){
            $blog_vistor=get_vister_num($list[$i]['artid'],'blog' );
            $list[$i]['blog_vistor']=$blog_vistor ;
        }
        $this->assign('list',$list);// ��ֵ���ݼ�
        $this->assign('page',$show);// ��ֵ��ҳ���
        $Cat = M("Cat");
		$cat = $Cat->where('username="' . $name . '"')->select();
		$this->assign('cat', $cat);
        $this->display();
    }
    //    �Ķ���ƪ����
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
            $this->error('û����ƪ���£�',U('/Blog/Index/'));
        }
        /*��¼����*/
        mode_vistor_log($blog['artid'], 'blog');
        /*ͳ�Ʒ���*/
        $blog_vistor=get_vister_num($blog['artid'], 'blog');
        $this->assign('myblog', $myblog);
        $this->assign('blog_vistor', $blog_vistor);
        $this->display();
    }
}