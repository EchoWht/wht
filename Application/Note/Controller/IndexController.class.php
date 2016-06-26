<?php
namespace Note\Controller;
use Think\Controller;
class IndexController extends Controller {
	public function index() {
		//查询用户的note
		$name = session('name');
		if(!isset($name)){
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
//		dump($catword);
		$Note = M("Note");
		$count      = $Note->where('username="' . $name . '"and notetitle like "%'.$condation.'%" and noteremark1 like "%'.$catword.'%"')->count();// 查询满足要求的总记录数
		$Page       = new \Think\Page($count,12);// 实例化分页类 传入总记录数和每页显示的记录数(25)
		$show       = $Page->showB();// 分页显示输出
// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$mynote = $Note->where('username="' . $name . '"and notetitle like "%'.$condation.'%" and noteremark1 like "%'.$catword.'%"')->order('noteid desc')->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign('mynote',$mynote);// 赋值数据集
		$this->assign('page',$show);// 赋值分页输出
		//$mynote = $Note -> where('username="' . $name . '"')->order('noteid desc') -> select();
		//$mynote['urlhost']=getIco($mynote['noteurl']);
		//dump($mynote['noteurl']);
		$add = U('Index/addNote');
		$update = U('Index/updateNoteTip');
		$catlist=catlist($name);
		$this->assign('catlist',$catlist);
		
		$this -> assign('mynote', $mynote);
		
		$this -> assign('add', $add);
		$this -> assign('update', $update);
		$this -> assign('name', $name);
		$this -> display();
	}
	//增加链接
	public function addNote() {
		//根据链接获得标题
				$note=array(
					'noteurl'=>I('post.noteurl',0),
					'noteremark1'=>I('post.noteremark1',0),
					'notecontent'=>I('post.notecontent',0),
					'notedate'=> date("Y-m-d H:i:s"),
					'username'=> session('name')
				);
		/***************根据url获得title start**********************/
		$lines_array = file($note['noteurl']);
		$lines_string = implode('', $lines_array);
		$pos = strpos($lines_string, 'utf-8');
		if ($pos === false) {$lines_string = iconv("gbk", "utf-8", $lines_string);
		}
		eregi("<title>(.*)</title>", $lines_string, $title);
		if ($title[1] == "") {
			$title[1] = $note['noteurl'];
		}
		/***************根据url获得title end**********************/
		$note=array(
					'noteurl'=>I('post.noteurl',0),
					'noteremark1'=>I('post.noteremark1',0),
					'notecontent'=>I('post.notecontent',0),
					'notedate'=> date("Y-m-d H:i:s"),
					'username'=> I('session.name',0),
					'notetitle'=> $title[1]
				);
//		dump($note);
		$Note = M("Note");
		$result=$Note->add($note);
		if($result){
			echo'ok';
		}else{
			echo'no';
		}
	}
	
	public function updateNoteTip(){
			$note=array(
					'noteid'=>I('post.noteid',0),
					'noteremark1'=>I('post.noteremark1',0),
					'username'=> session('name')
				);
//			dump($note);
			$Note = M("Note");
			$result=$Note->where('noteid="' . $note['noteid'] . '"AND username="' . $note['username'] . '"')->save($note);
//			dump($result);
			if($result){
				echo'ok';
			}else{
				echo'no';
			}
	}
		public function updateNoteContent(){
			$note=array(
					'noteid'=>I('post.noteid',0),
					'notecontent'=>I('post.notecontent',0),
					'username'=> session('name')
				);
//			dump($note);
			$Note = M("Note");
			$result=$Note->where('noteid="' . $note['noteid'] . '"AND username="' . $note['username'] . '"')->save($note);
//			dump($result);
			if($result){
				echo'ok';
			}else{
				echo'no';
			}
	}
		public function deletNote(){
			$noteid=I('post.noteid',0);
			$username=I('session.name',0);
			$Note = M("Note");
//			$result=$Note->delete($noteid);
			$result=$Note->where('username="'.$username.'"')->delete($noteid);
			if($result){
				echo'ok';
			}else{
				echo'no';
			}
		}
/*
 * 点击
 * */
	public function click(){
		$note['noteid']=I('get.noteid',0);
		$Note = M("Note");
		$note_r=$Note->where('noteid='.$note['noteid'].'')->find();
		$note['noteclick']=$note_r['noteclick']+1;
		$result=$Note->where('noteid='.$note['noteid'].'')->save($note);
		$this->ajaxReturn($result);
	}
/*分享到sina微博*/
	public function sharesina(){
		 $this->ajaxReturn(sendSinaText($_GET['text'])) ;
	}
}
