<?php
/**
 * Created by zhangkx
 * Email: zkx520tnhb@163.com
 * Date: 2015/8/1
 * Time: 23:15
 */
  
/*************************** api开发辅助函数 **********************/

/**
 * http://www.jb51.net/article/70626.htm
 * @param null $msg  返回正确的提示信息
 * @param flag success CURD 操作成功
 * @param array $data 具体返回信息
 * Function descript: 返回带参数，标志信息，提示信息的json 数组
 *
 */
function returnApiSuccess($msg = null,$data = array()){
  $result = array(
    'result' => '1',
    'msg' => $msg,
    'data' =>$data
  );
  print json_encode($result);
  // exit(json_encode($result));
}
  
/**
 * @param null $msg  返回具体错误的提示信息
 * @param flag success CURD 操作失败
 * Function descript:返回标志信息 ‘Error'，和提示信息的json 数组
 */
function returnApiError($msg = null){
  $result = array(
    'result' => '0',
    'msg' => $msg,
  );
  // print json_encode($result);
  exit(json_encode($result));
}
  
/**
 * @param null $msg  返回具体错误的提示信息
 * @param flag success CURD 操作失败
 * Function descript:返回标志信息 ‘Error'，和提示信息，当前系统繁忙，请稍后重试；
 */
function returnApiErrorExample(){
  $result = array(
    'result' => '0',
    'msg' => '当前系统繁忙，请稍后重试！',
  );
  // print json_encode($result);
  exit(json_encode($result));
}
  
/**
 * @param null $data
 * @return array|mixed|null
 * Function descript: 过滤post提交的参数；
 *
 */
  
 function checkDataPost($data = null){
  if(!empty($data)){
    $data = explode(',',$data);
    foreach($data as $k=>$v){
      if((!isset($_POST[$k]))||(empty($_POST[$k]))){
        if($_POST[$k]!==0 && $_POST[$k]!=='0'){
          returnApiError($k.'值为空！');
        }
      }
    }
    unset($data);
    $data = I('post.');
    unset($data['_URL_'],$data['token']);
    return $data;
  }
}
  
/**
 * @param null $data
 * @return array|mixed|null
 * Function descript: 过滤get提交的参数；
 *
 */
function checkDataGet($data = null){
  if(!empty($data)){
    $data = explode(',',$data);
    foreach($data as $k=>$v){
      if((!isset($_GET[$k]))||(empty($_GET[$k]))){
        if($_GET[$k]!==0 && $_GET[$k]!=='0'){
          returnApiError($k.'值为空！');
        }
      }
    }
    unset($data);
    $data = I('get.');
    unset($data['_URL_'],$data['token']);
    return $data;
  }
}