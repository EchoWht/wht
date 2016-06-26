<?php

/**
 * Created by PhpStorm.
 * User: Echowht
 * Date: 2016/3/6
 * Time: 21:59
 */
namespace Blog\Model;

use Think\Model;
class BlogModel extends Model {
    /*根据用户名和id获取note*/
    public function getUserBlogById($blogid){
        $Blog = M("Blog");
        $condition['artid']=$blogid;
        $blog=$Blog->where($condition)->find();
        return $blog;
    }
}
