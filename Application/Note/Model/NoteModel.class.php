<?php

/**
 * Created by PhpStorm.
 * User: Echowht
 * Date: 2016/3/6
 * Time: 21:59
 */
namespace Note\Model;

use Think\Model;

class NoteModel extends Model
{
    /*根据用户名和id获取note*/
    public function getUserNote($noteid, $username)
    {
        $Note = M("Note");
        $condition['noteid'] = $noteid;
        $condition['username'] = $username;
        $note = $Note->where($condition)->find();
        return $note;
    }
}
