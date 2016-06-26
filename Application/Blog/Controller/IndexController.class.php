<?php
namespace Blog\Controller;

use Think\Controller;

class IndexController extends Controller
{

    public function index()
    {
        $name = session('name');
        if (!isset($name)) {
            $this->success('您还没有登录', U('../../login.php/Index'));
            exit;
        }
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
        $count      = $Blog->where('username="' . $name . '"  and artremark1 like "%'.$catword.'%" and (arttitle like "%'.$condation.'%" or artcontent like "%'.$condation.'%")')->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($count,4);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show       = $Page->showB();// 分页显示输出
// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $Blog->where('username="' . $name . '"  and artremark1 like "%'.$catword.'%" and (arttitle like "%'.$condation.'%" or artcontent like "%'.$condation.'%")')->order('artid desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        for($i=0;$i<count($list);$i++){
            $blog_vistor=get_vister_num($list[$i]['artid'],'blog' );
            $list[$i]['blog_vistor']=$blog_vistor ;
        }
        $this->assign('list',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出

        $this->assign('name', $name);
//        阅读
        $readmore = U('Index/readMore');
//        $readmore = U('Read/index');
//        增加
        $add = U('Index/add');
        $this->assign('add', $add);
        $this->assign('readmore', $readmore);
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
        if (!isset($name)) {
            $this->success('您还没有登录', U('/Login/Index'));
            exit;
        }
        $blog = array(
            'artid' => I('get.artid', 0)
        );
        $Blog = M("Blog");
        $myblog = $Blog->where('artid=' . $blog['artid'] . ' AND username="' . $name . '"')->select();
//        dump(empty($myblog));
        if(empty($myblog)){
            $this->error('没有这篇文章！',U('/Blog/Index/'));
        }
        $blog_vistor=get_vister_num($blog['artid'], 'blog');
        $blog_comments=get_comments($blog["artid"], "blog");
        $this->assign('myblog', $myblog);
        $this->assign('blog_vistor', $blog_vistor);
        $this->assign('blog_comments', $blog_comments);
        $this->display();
    }

//    增加页面
    public function add()
    {

        $name = session('name');
        $this->assign('name', $name);
        if (!session(name)){
            $this->success('您还没有登录', U('/Login/Index'));
            exit();
        }
        $catlist=catlist($name);
        $this->assign('catlist',$catlist);
        $this->assign('name', session(name));
        $this->display();
    }

    //增加

    public function addBlog()
    {
        $name = session('name');
        $this->assign('name', $name);
        if (!session(name)){
            $this->success('您还没有登录', U('/Login/Index'));
            exit();
        }
        $blog=array(
            'username'  =>  I('session.name'),
            'arttitle'  =>  I('post.arttitle',0),
            'artdate'   =>  date("Y-m-d H:i:s"),
            'artcontent'=>  $_POST['artcontent'],
            'ispublic'=>  I('post.ispublic'),
            'artremark1'=>I('post.classification')
        );
//        dump($blog);

        if ($blog['arttitle']==''){
            $this->success('别忘了填写标题');
            exit;
        }

       //dump($blog);
        $Blog=M('Blog');
        $result=$Blog->add($blog);
        if($result){
            $this->success('发表成功', U('/Blog/Index'));
        }else{
            $this->error('发表失败');
        }
        $this->display();
    }
//    到修改Blog页面
    public function edit(){
        $name = session('name');
        $this->assign('name', $name);
        $msg='还没有登录';

        if (!isset($name)) {
            $this->success($msg, U('/Login/index'));
            exit;
        }
        $blog = array(
            'artid' => I('get.artid', 0)
        );
        $Blog = M("Blog");
        $myblog = $Blog->where('artid="' . $blog['artid'] . '""' . $name . '"')->select();
//        dump($myblog);
        $myblog[0]['artcontent']=htmlspecialchars( $myblog[0]['artcontent']);
        $catlist=catlist($name);
        $this->assign('catlist',$catlist);
        $this->assign('myblog', $myblog);
        $this->display();
    }
    public function updateBlog(){
        $name = session('name');
        $this->assign('name', $name);
        $blog=array(
            'arttitle'  =>  I('post.arttitle',0),
            'ispublic'=>  I('post.ispublic'),
            'artcontent'=>  $_POST['artcontent'],
            'artremark1'=>I('post.classification')
        );
//        dump($blog);

        if ($blog['arttitle']==''){
            $this->success('别忘了填写标题');
            exit;
        }

       // dump($blog);
        $Blog=M('Blog');
        $result=$Blog->where('artid='.I('post.artid').' and username="'.I('session.name').'"')->save($blog); ;
        if($result){
            $this->success('修改成功', '/index.php/Blog/Index');
        }else{
            $this->error('修改失败');
        }
//        $this->display();
    }
//    删除blog
    public function delBlog(){
        $name = session('name');
        $this->assign('name', $name);
        $artid=I('post.artid',0);
        $username=I('session.name',0);
        $Blog = M("Blog");
//			$result=$Note->delete($noteid);
        $result=$Blog->where('username="'.$username.'"')->delete($artid);
        if($result){
            echo'ok';
        }else{
            echo'no';
        }
    }
    public function upload(){
        $extensions = array("jpg","bmp","gif","png");
        $uploadFilename = $_FILES['upload']['name'];
        $extension = pathInfo($uploadFilename,PATHINFO_EXTENSION);
        if(in_array($extension,$extensions)){
            $uploadPath = str_replace("\\",'/',realpath(__ROOT__))."/uploads/";
            $uuid = str_replace('.','',uniqid("",TRUE)).".".$extension;
            $desname = $uploadPath.$uuid;
            $previewname = '/uploads/'.$uuid;
            $tag = move_uploaded_file($_FILES['upload']['tmp_name'],$desname);
            $callback = $_REQUEST["CKEditorFuncNum"];
            echo "<script type='text/javascript'>window.parent.CKEDITOR.tools.callFunction($callback,'".$previewname."','');</script>";
        }else{
            echo "<font color=\"red\"size=\"2\">*文件格式不正确（必须为.jpg/.gif/.bmp/.png文件）</font>";
        }
    }
/*分享到sina微博*/
    public function sharesina(){
        $blogid=$_POST['blogid'];
        $Blog = D("Blog");
        $blog=$Blog->getUserBlogById($blogid);
        if ($blog==null){
            $message="没有这条note";
        }else{
            $text=$blog['arttitle'].'http://'.$_SERVER['SERVER_NAME'].U('/index.php/Home/Blog/readMore').'?artid='.$blogid;
            $message=sendSinaText($text);
        }
        $this->ajaxReturn($message) ;
    }

}