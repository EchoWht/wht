<?php
namespace Home\Model;
use Think\Model;
class EmailLogModel extends Model {

    public function insertEmailLog($smtpemailto,$smtpusermail,$mailtitle,$mailcontent,$mailfilename,$status){
        $data=array(
            'smtpemailto'=>$smtpemailto,
            'smtpusermail'=>$smtpusermail,
            'mailtitle'=>$mailtitle,
            'mailcontent'=>$mailcontent,
            'mailfilename'=>$mailfilename,
            'sendtime'=>date("Y-m-d H:i:s")
        );
        if ($status==1000){
            $data['status']=1;
        }else{
            $data['status']=0;
        }
        $this->add($data);
    }
}
