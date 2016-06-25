<?php
/**
 * Created by PhpStorm.
 * User: Echowht
 * Date: 2016/5/1
 * Time: 23:59
 */

namespace User\Controller;

use Think\Controller;


class SetController extends Controller
{
    public function index()
    {
        $name = session('name');
        if (!isset($name)) {
            $this->success('您还没有登录', U('../../login.php/Index'));
            exit;
        }
        $this->assign('name', $name);
        $this->display();
    }

    public function setcodestyle()
    {
        $name = session('name');
        if (!isset($name)) {
            $this->success('您还没有登录', U('../../login.php/Index'));
            exit;
        }
        $this->assign('name', $name);
        $Codestyle = M('Codestyle');
        $result = $Codestyle->select();
        $this->assign('codestyle', $result);

        $this->display();
    }

    public function setstyle()
    {
        $name = session('name');
        if (!isset($name)) {
            $this->success('您还没有登录', U('../../login.php/Index'));
            exit;
        }
        $this->assign('name', $name);
        if (I('post.tocodestyle')) {
            $User = M('User');
            $data['codestyle'] = I('post.tocodestyle');
            $User->where('username="' . session('name') . '"')->save($data);
            session('codestyle', I('post.tocodestyle'));
        }
    }

    public function setcat()
    {
        $name = session('name');
        if (!isset($name)) {
            $this->success('您还没有登录', U('../../login.php/Index'));
            exit;
        }
        $this->assign('name', $name);

        $Cat = M('Cat');
        $list = $Cat->where('username="' . $name . '"')->select();
//        dump($list);
        $this->assign('list', $list);
        $this->display();
    }

    public function addcat()
    {
        $name = session('name');
        if (!isset($name)) {
            $this->success('您还没有登录', U('../../login.php/Index'));
            exit;
        }
        $this->assign('name', $name);
        if (!session(name)) {
            $this->success('您还没有登录', U('/Login/Index'));
            exit();
        }
        $cat = array(
            'username' => I('session.name'),
            'catname' => I('post.catname'),
        );
//        dump($blog);

        if ($cat['catname'] == '') {
            $this->success('别忘了填写分类名');
            exit;
        }

        //dump($blog);
        $Cat = M('Cat');
        $result = $Cat->add($cat);
        if ($result) {
            $this->success('添加成功', U('/User/Set/setcat'));
        } else {
            $this->error('添加失败');
        }
        $this->display();
    }

    //    删除cat
    public function delCat()
    {
        $name = session('name');
        if (!isset($name)) {
            $this->success('您还没有登录', U('../../login.php/Index'));
            exit;
        }
        $this->assign('name', $name);
        $catid = I('post.id');
        $username = I('session.name');
        $Cat = M("Cat");
//			$result=$Note->delete($noteid);
        $result = $Cat->where('username="' . $username . '"')->delete($catid);
        if ($result) {
            echo 'ok';
        } else {
            echo 'no';
        }
    }

    /*sina绑定用户*/
    public function sinabounduser()
    {

        if (isset($_SESSION['sina_id']) && isBoundUserBySina($_SESSION['sina_id']) == 0) {

        } else {
            $this->success('走你~', '/index.php/');
            exit();
        }
        $this->display();
    }

    /*sina*/
    public function user()
    {
        $username = I("get.username", 0);
        $message = "";
        if (issetusername($username) == 0) {
            //妥了，还没有人用这个用户名，就这个了？
            $message = 100;
        } else {
            $message = isUserBoundSina($username);
        }
        $this->ajaxReturn($message);
    }

    public function email()
    {
        $email = I("get.email", 0);
        $message = isEmailBound($email);
        $this->ajaxReturn($message);
    }

    public function sinabound()
    {
        $username = I("post.username", 0);
        $email = I("post.email", 0);
        $User = M("User");
        $message='';
        if (issetusername($username) == 0) {
            //妥了，还没有人用这个用户名，就这个了？
            if ($email != null && isEmailBound($email) == 0) {
                $user = array(
                    'username' => $username,
                    'email' => $email,
                    'sinaopenid' => $_SESSION['sina_id'],
                    'passwd' => md5(I('post.password')),
                    'registertime' => date("Y-m-d H:i:s")
                );

                $result = $User->add($user);
                if ($result) {
                    session('name', $user['username']);
                    $this->success('注册成功', U('/Home/Index/index'));
                } else {
                    $message = 1001;
//                    $message='注册失败';
                }
            }

        } else {
//            如果绑定了则输出false
            if (isUserBoundSina($username)) {
                $message=1002;
//                $message = "该用户已经绑定";
            } else {
                dump($_POST);
                $result = $User->where('username="' . $username . '" AND passwd="' . md5(I('post.passwd')) . '"')->find();
                if ($result == null) {
                    $message=1003;
//                    $message = '密码错误';
                } else {
                    $condition['username'] = $username;
                    $condition['passwd'] = md5(I('post.password'));
                    $data['sinaopenid'] = $_SESSION['sina_id'];
                    $u = $User->where($condition)->save($data);
                    if ($u) {
                        session('name', $username);
                        $this->success('绑定成功', U('/Home/Index/index'));
                    } else {
                        $message=1004;
//                        $message = '绑定失败';
                    }
                }

            }
        }
        $this->ajaxReturn($message);
    }

}