<?php

/**
 * 统计表中的条数
 * @param String $M 模型名字
 * @return int
 */
function count_num($M){
    $Mode=M($M);
    $cout=$Mode->count();
    return $cout;
}
/**
 * 统计访问量
 * @param String $page_name 页面名称
 * @return int
 */
function vistor_log($page_name){
    $Visitorlog=M('Visitorlog');
    $page_url='http://'.$_SERVER['SERVER_NAME'].':'.$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
    $visitor=array(
        'username'=>'',
        'pagename'=>$page_name,
        'pageurl'=>$page_url,
        'visittime'=>date("Y-m-d H:i:s"),
        'userstate'=>'',
        'userip'=>get_client_ip()
    );
    if (!session(name)){
       $visitor['username']='v';
        $visitor['userstate']=0;
    }else{
        $visitor['username']=session(name);
        $visitor['userstate']=1;
    }
    $result=$Visitorlog->add($visitor);
   // return $page_name;
}

/**
 * 模块访问量记录
 * @param  String $pagetype 类型
 * @param Int $pageid 页面id
 */
function mode_vistor_log($pageid,$pagetype){
    $ModuleVisitorlog=M('ModuleVisitorlog');
    $page_url='http://'.$_SERVER['SERVER_NAME'].':'.$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
    $visitor=array(
        'username'=>'',
        'pageid'=>$pageid,
        'pagetype'=>$pagetype,
        'pageurl'=>$page_url,
        'visittime'=>date("Y-m-d H:i:s"),
        'userstate'=>'',
        'userip'=>get_client_ip()
    );
    if (!session(name)){
        $visitor['username']='v';
        $visitor['userstate']=0;
    }else{
        $visitor['username']=session(name);
        $visitor['userstate']=1;
    }
    $result=$ModuleVisitorlog->add($visitor);
}
/**
 * 模块访问量统计
 * @param  String $pagetype 类型
 * @param Int $pageid 页面id
 * @return Int
 */
function get_vister_num($pageid,$pagetype){
    $ModuleVisitorlog=M('ModuleVisitorlog');
    $condition['pageid'] = $pageid;
    $condition['pagetype'] = $pagetype;
    $count = $ModuleVisitorlog->where($condition)->count('id');
    return $count;
}
/**
 * 获取评论
 * @param  String $pagetype 类型
 * @param Int $pageid 页面id
 * @return array
 */
function get_comments($pageid,$pagetype){
   $Comments=M('Comments');
    $condition['pageid']=$pageid;
    $condition['pagetype']=$pagetype;
    $result=$Comments->where($condition)->select();
    return $result;
}
/**
 * 获取当前月以及之前月份的年月
 * @param int $step 后退月数
 * @return array
 */
function getForwordMonth($step){
    $month=array();
    for($i=$step;$i>0;$i--){
        $month[]=date("Y-m",strtotime("-".$i." month"));
    }
  return $month;
}
//输出二维码到浏览器
function erweima()
{
    vendor("phpqrcode.phpqrcode");
    $value="http://www.jb51.net";
    $errorCorrectionLevel = "L";
    $matrixPointSize = "4";
    QRcode::png($value, false, $errorCorrectionLevel, $matrixPointSize);
}
//输出图表到浏览器
function jpgraph(){
    vendor("jpgraph.jpgraph");
    vendor("jpgraph.jpgraph_bar");
    $datay1=array(13,8,19,7,17,6);
    $datay2=array(4,5,2,7,5,25);

// Create the graph.
    $graph = new Graph(350,250);
    $graph->SetScale('textlin');
    $graph->SetMarginColor('white');

// Setup title
    $graph->title->Set('Acc bar with gradient');

// Create the first bar
    $bplot = new BarPlot($datay1);
    $bplot->SetFillGradient('AntiqueWhite2','AntiqueWhite4:0.8',GRAD_VERT);
    $bplot->SetColor('darkred');

// Create the second bar
    $bplot2 = new BarPlot($datay2);
    $bplot2->SetFillGradient('olivedrab1','olivedrab4',GRAD_VERT);
    $bplot2->SetColor('darkgreen');

// And join them in an accumulated bar
    $accbplot = new AccBarPlot(array($bplot,$bplot2));
    $accbplot->SetColor('red');
    $accbplot->SetWeight(1);
    $graph->Add($accbplot);

    $graph->Stroke();
}
/**
 * 自定义xy的折线图
 * @param array $ydata y轴数据
 * @param array $xdata x轴数据
 * @param string $legend 图例内容
 * @param string $linecolor 线的颜色
 */
function jpZx($ydata,$xdata,$legend,$linecolor){
    vendor("jpgraph.jpgraph");
    vendor("jpgraph.jpgraph_line");
// Create the graph. These two calls are always required
    $graph = new Graph(400, 250);
    $graph->SetScale("textlin");
//    左右上下
$graph->img->SetMargin(50, 50, 20, 50);
//$graph->title->SetFont(FF_CHINESE);
    $graph->xaxis->SetFont(FF_FONT1, FS_BOLD);
    $graph->xaxis->SetTickLabels($xdata);

//    $graph->title->Set("title");
// Create the linear plot
    $lineplot = new LinePlot( $ydata);
    $lineplot->SetLegend($legend);
// Add the plot to the graph
    $graph->Add($lineplot);
//修改颜色需要放在add下面
    $lineplot->SetColor($linecolor);
// Display the graph
    $graph->Stroke();
}

//生成excel表格
function excel(){
    vendor("PHPExcel.PHPExcel");
    //简单在服务器端生产excel
    $objPHPExcel= new PHPExcel();//实例一个PHPExcel类 等同于新建一个excel表格
    $objSheet=$objPHPExcel->getActiveSheet();//获取当前使用的sheet
    $objSheet->setTitle('表格1');//给当前sheet设置名称
    $objSheet->setCellValue('A1','用户名')->setCellValue('B1','密码');

    $objSheet2=$objPHPExcel->createSheet();
    $objSheet2=$objPHPExcel->setActiveSheetIndex(1);//设置当前使用的sheet
    $objSheet=$objPHPExcel->getActiveSheet();//获取当前使用的sheet
    $objSheet2->setTitle('sheet2');//给当前sheet设置名称
    $objSheet2->setCellValue('A1','username')->setCellValue('B1','password');
    $objWrite=PHPExcel_IOFactory::createWriter($objPHPExcel,'Excel2007');//安装指定格式生成excel文件
    $objWrite->save('Public/excel/demo2.xlsx');
}

//遍历用户分类
function catlist($username){
    $Cat=M('Cat');
    $list=$Cat->where('username="'.$username.'"')->select();
    return $list;
}
function getIco($url){
    $tempu=parse_url($url);
    $host=$tempu['host'];
    return $host;
}

/*通过sina登录*/
/**
 * 查询微博用户是否绑定本站会员
 * @param String $sina_id
 * @return string
 */
function isBoundUserBySina($sina_id){
    $User=M('User');
    $condation['sinaopenid']=$sina_id;
    $result= $User->where($condation)->find();
    if ($result){
        return $result;
    }else{
        return 0;
    }
}
/**
 * 获取sina的openid
 * @return int
 */
function getSinauserId(){
    vendor('Sina.Sina');
    $c=new \SaeTClientV2(C('WB_AKEY'),C('WB_SKEY') ,$_SESSION['token']['access_token'] );
    $ms  = $c->home_timeline(); // done
    $uid_get = $c->get_uid();
    $uid = $uid_get['uid'];
    return $uid;
}
/**
 * 根据id获取用户信息
 * @param String $sina_id
 * @return array
 */
function setUserInfoBySinaId($sina_id){

}

